<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('Role') == 'user' && $this->session->userdata('Nic') != '') {
            $this->load->model('user_model');
            $res = $this->user_model->getCV();
            if ($res) {
                $id = $this->session->userdata('Nic');
                $data['pers'] = $this->user_model->get_personal($id);
                $data['skill'] = $this->user_model->get_skill($id);
                $data['lang'] = $this->user_model->get_language($id);
                $data['work'] = $this->user_model->get_work($id);
                $data['uni'] = $this->user_model->get_uni($id);
                $this->load->view('user/dashboard',$data);
            }else{
                $this->load->view('user/emptydashboard');
            }
            
        } else {
            redirect(base_url() . 'index.php/Welcome/login');
        }
    }
    public function createNew()
    {
        if ($this->session->userdata('Role') == 'user' && $this->session->userdata('Nic') != '') {
            $this->load->view('user/cv_form');
        } else {
            redirect(base_url() . 'index.php/Welcome/login');
        }
    }
    public function sendData()
    {
        if ($this->session->userdata('Role') == 'user' && $this->session->userdata('Nic') != '') {
            $this->load->model('user_model');
            $res = $this->user_model->insertData($this->input->post());
        } else {
            redirect(base_url() . 'index.php/Welcome/login');
        }
    }
    public function chooseTem()
    {
        if ($this->session->userdata('Role') == 'user' && $this->session->userdata('Nic') != '') {
            $this->load->view('template');
        } else {
            redirect(base_url() . 'index.php/Welcome/login');
        }
    }

    public function downloadPdf1()
    {
        $id = $this->session->userdata('Nic');
        $this->load->model('user_model');
        $pers = $this->user_model->get_personal($id);
        $skill = $this->user_model->get_skill($id);
        $lang = $this->user_model->get_language($id);
        $work = $this->user_model->get_work($id);
        $uni = $this->user_model->get_uni($id);

        require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Code Fellas');
        $pdf->SetTitle('Example 001');
        $pdf->SetSubject('Resume template');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');


        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(_FILE_) . '/lang/eng.php')) {
            require_once(dirname(_FILE_) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('times', '', '18');

        // add a page
        $pdf->AddPage();



        // create some HTML content
        $html1 = '<h1 align="center" style="color:black;">&nbsp;<span style="color:white;">...</span>&nbsp; ' . $pers[0]['fname'] . '&nbsp;<span style="color:orange;">' . $pers[0]['lname'] . '</span>&nbsp;</h1>';
        // output the HTML content
        $pdf->writeHTML($html1, true, false, true, false, '');

        // create some HTML content
        $pdf->SetFont('times', '', '10');
        $html2 = '
           <ol type = "none">
           <li align="center">' . $pers[0]['mobile'] . '</li>
           <li align="center">' . $pers[0]['mail'] . '</li>
           <li align="center">' . $pers[0]['city'] . ', ' . $pers[0]['country'] . '</li>
           </ol>';

        // output the HTML content
        $pdf->writeHTML($html2, true, false, true, false, '');

        // create some HTML content
        $pdf->SetFont('times', '', '10');
        $html3 = '
      <h1 style="color:orange;">Skills</h1>
       <ul>
            <li>' . $skill[0]['sk1'] . '</li>
            <li>' . $skill[0]['sk2'] . '</li>
            <li>' . $skill[0]['sk3'] . '</li>
            <li>' . $skill[0]['sk4'] . '</li>
            <li>' . $skill[0]['sk5'] . '</li>
        </ul>
        <br/>
        <hr />

      <h1 style="color:orange;"> Education Qualification</h1>
      <ul>   <li><h3><b>' . $uni[0]['uni1'] . '</b></h3></li>
            <h4>' . $uni[0]['f1'] . ' - ' . $uni[0]['t1'] . '</h4>
                <p>' . $uni[0]['de1'] . '</p>
 

 
         <li><h3><b>' . $uni[0]['uni2'] . '</b></h3></li>
            <h4>' . $uni[0]['f2'] . ' - ' . $uni[0]['t2'] . '</h4>
               <p>' . $uni[0]['de2'] . '</p>
   

      </ul>
      <br/>
      <hr />


      <h1 style="color:orange;">Work Experience</h1>
      <ul type="disco">
        <h3>
           <li><b>' . $work[0]['wo1'] . '</b></li>
        </h3>
        <h4>
            ' . $work[0]['from1'] . ' - ' . $work[0]['to1'] . '
        </h4>
        <p>
          ' . $work[0]['des1'] . '
        </p>
        <br/>
        <h3>
            <li><b>' . $work[0]['wo2'] . '</b></li>
        </h3>
        <h4>' . $work[0]['from2'] . ' - ' . $work[0]['to2'] . '</h4>
        <p>
         ' . $work[0]['des2'] . '
        </p>
            
        <hr/
      </ul> ';

        // output the HTML content
        $pdf->writeHTML($html3, true, false, true, false, '');
        $html4 = '<h1 style="color:orange;">Languages</h1>
        <div style="display:flex;">
        <ul style="display:flex;">
            <li>' . $lang[0]['la1'] . '</li>
            <li>' . $lang[0]['la2'] . '</li>
            <li>' . $lang[0]['la3'] . '</li>
        </ul>
        </div';
        $pdf->writeHTML($html4, true, false, true, false, '');



        // ---------------------------------------------------------

        //Close and output PDF document
        $pdf->Output('example_006.pdf', 'I');

        //============================================================+
        // END OF FILE
    }
    public function downloadPdf2()
    {
        $id = $this->session->userdata('Nic');
        $this->load->model('user_model');
        $pers = $this->user_model->get_personal($id);
        $skill = $this->user_model->get_skill($id);
        $lang = $this->user_model->get_language($id);
        $work = $this->user_model->get_work($id);
        $uni = $this->user_model->get_uni($id);

        require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('Resume');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');



        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);



        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(_FILE_) . '/lang/eng.php')) {
            require_once(dirname(_FILE_) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('times', '', 13);

        // add a page
        $pdf->AddPage();


        // create columns content
        $left_column = '<b><h2>  Contact</b><br/><hr/>
                 <dl>
                   <dt>  Phone:</dt>
                      <dd>' . $pers[0]['mobile'] . '</dd>
                    <dt>  Email:</dt>
                      <dd>' . $pers[0]['mail'] . '</dd>
                    <dt>  Address:</dt>
                      <dd>' . $pers[0]['city'] . ', ' . $pers[0]['country'] . '</dd>
                 </dl>
                 

                 <b><h2>  Education</b><br/><hr/>
                 <dl>
                   <dt>  ' . $uni[0]['uni1'] . ' :</dt>
                      <dd>' . $uni[0]['f1'] . ' - ' . $uni[0]['t1'] . ' <br/> ' . $uni[0]['de1'] . '</dd>
                      <dt>  ' . $uni[0]['uni2'] . ':</dt>
                      <dd>' . $uni[0]['f2'] . ' - ' . $uni[0]['t2'] . ' <br/> ' . $uni[0]['de2'] . '</dd>
                    
                 </dl>
                 
                
                 <b><h2>  Skills</b><br/><hr/>
                 <ul>
                   <li>' . $skill[0]['sk1'] . '</li>
                   <li>' . $skill[0]['sk2'] . '</li>
                   <li>' . $skill[0]['sk3'] . '</li>
                   <li>' . $skill[0]['sk4'] . '</li>
                   <li>' . $skill[0]['sk5'] . '</li>
                 </ul>
                

                 <b><h2>  Language</b><br/><hr/>
                 <ul>
                   <li>' . $lang[0]['la1'] . '</li>
                   <li>' . $lang[0]['la2'] . '</li>
                   <li>' . $lang[0]['la3'] . '</li>
                 </ul>
                 <br/>';

        $right_column = '<b><strong><h1 align="left" style="color:#040224;">  ' . $pers[0]['fname'] . ' <span style="color:#040224;">' . $pers[0]['lname'] . '</span></h1></strong></b></br><h3 style="color:#251780;">  ' . $pers[0]['prof'] . '</h3>
                <p>' . $pers[0]['about_me'] . '<br/>
                </p>

      <b><h3>  Experience</b></h3><br/><hr/>
        <ul type="disco">
        <h3>
           <li><b style="color:#251780;">' . $work[0]['wo1'] . '</b></li>
        </h3>
        ' . $work[0]['from1'] . ' - ' . $work[0]['to1'] . ' |
            
        <p>
        ' . $work[0]['des1'] . '
        </p>
        

        <h3>
            <li><b style="color:#251780;">' . $work[0]['wo2'] . '</b></li>
        </h3>
        ' . $work[0]['from2'] . ' - ' . $work[0]['to2'] . '|
            
        <p>
        ' . $work[0]['des2'] . '
        </p>
            
        <hr/
      </ul>';

        // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

        // get current vertical position
        $y = $pdf->getY();

        // set color for background
        $pdf->SetFillColor(9, 3, 51);

        // set color for text
        $pdf->SetTextColor(252, 252, 252);

        // write the first column
        $pdf->writeHTMLCell(65, 261, '', $y, $left_column, 1, 0, 1, true, 'J', true);

        // set color for background
        $pdf->SetFillColor(241, 240, 247);

        $pdf->SetTextColor(8, 2, 48);

        // write the second column
        $pdf->writeHTMLCell(125, 261, '', '', $right_column, 1, 1, 1, true, 'J', true);

        $pdf->lastPage();


        //Close and output PDF document
        $pdf->Output('example_007.pdf', 'I');
    }

    public function logout()
    {
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('Nic');
        $this->session->unset_userdata('Role');

        redirect(base_url() . 'index.php/Welcome/login');
    }
}
