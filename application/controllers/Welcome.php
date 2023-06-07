<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


  public function index()
  {
    $this->load->view('home');
  }

  public function sendData()
  {
    $this->load->model('admin_model');
    $res = $this->admin_model->insertData($this->input->post());
  }
  public function downloadPdf($id)
  {
    $this->load->model('admin_model');
    $pers = $this->admin_model->get_personal($id);
    $skill = $this->admin_model->get_skill($id);
    $lang = $this->admin_model->get_language($id);
    $work = $this->admin_model->get_work($id);
    $uni = $this->admin_model->get_uni($id);
    // var_dump($pers);
    // echo "</br>";
    // var_dump($skill);
    // echo "</br>";
    // var_dump($lang);
    // echo "</br>";
    // var_dump($work);
    // echo "</br>";
    // var_dump($uni);
    // echo "</br>";  

    require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->setTitle('Curriculum Vitae');
    $pdf->AddPage();


    $html = "<h1>Welcome to <a href='http://www.tcpdf.org' style='text-decoration:none;background-color:#CC0000;color:black;'>&nbsp;<span style='color:black;'>TC</span><span style='color:white;'>PDF</span>&nbsp;</a>!</h1>
    <i>This is the first example of TCPDF library.</i>
    <p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
    <p>Please check the source code documentation and other examples for further information.</p>
    <p style='color:#CC0000;'>TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href='http://sourceforge.net/donate/index.php?group_id=128076'>MAKE A DONATION!</a></p>";



    $w3 = "<body>
      <div>
        <div>
          <h2 style='color:red;'>" . $pers[0]['fname']  . "</h2>
          <div>
            <ul>
              <li>" . $pers[0]['prof']  . "</li>
              <li>" . $pers[0]['city']  . ', ' . $pers[0]['country']  . "</li>
              <li>" . $pers[0]['mail']  . "</li>
              <li>" . $pers[0]['mobile']  . "</li>
            </ul>
            <hr />

            <p>
              <b>Skills</b>
            </p>
            <p>" . $skill[0]['sk1'] . "</p>
            <div style='width: 90%'>" . $skill[0]['per1'] . "</div>
            <p>" . $skill[0]['sk2'] . "</p>
            <div style='width: 80%'>" . $skill[0]['per2'] . "</div>
            <p>" . $skill[0]['sk3'] . "</p>
            <div style='width: 75%'>" . $skill[0]['per3'] . "</div>
            <p>" . $skill[0]['sk4'] . "</p>
            <div style='width: 50%'>" . $skill[0]['per4'] . "</div>
            <p>" . $skill[0]['sk5'] . "</p>
            <div style='width: 50%'>" . $skill[0]['per5'] . "</div>

            <br />

            <p>
              <b>Languages</b>
            </p>
            <ul>
              <li>" . $lang[0]['la1'] . "</li>
              <li>" . $lang[0]['la2'] . "</li>
              <li>" . $lang[0]['la3'] . "</li>
            </ul>
            
            <br />
          </div>
        </div>
        <br />

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div>
        
          <h2>Work Experience</h2>
          
            <h5>
              <b>Front End Developer / w3schools.com</b>
            </h5>
            <h6>
              Jan 2015 -
              <span>Current</span>
            </h6>
            <p>
              Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in
              deserunt aspernatur est reprehenderit sunt hic. Nulla tempora
              soluta ea et odio, unde doloremque repellendus iure, iste.
            </p>
            <hr />
          
        
            <h5><b>Web Developer / something.com</b></h5>
            <h6>Mar 2012 - Dec 2014</h6>
            <p>
              Consectetur adipisicing elit. Praesentium magnam consectetur vel
              in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora
              soluta ea et odio, unde doloremque repellendus iure, iste.
            </p>
            <hr />
       
      
            <h5>
              <b>Graphic Designer / designsomething.com</b>
            </h5>
            <h6>Jun 2010 - Mar 2012</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <br />
          
		  
        <div>
          <h2>Education</h2>
          
            <h5><b>W3Schools.com</b></h5>
            <h6>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
         

         
            <h5><b>London Business School</b></h5>
            <h6>2013 - 2015</h6>
            <p>Master Degree</p>
           
      
       
            <h5><b>School of Coding</b></h5>
            <h6>2010 - 2013</h6>
            <p>Bachelor Degree</p>
        
         
        </div>

        
      </div>

      
   
    </body>";

    $pdf->writeHTMLCell(0, 0, '', '', $w3, 0, 1, 0, true, '', true);

    $pdf->Output('example_001.pdf', 'I');
  }
  public function downloadPdf1($id)
  {
    $this->load->model('admin_model');
    $pers = $this->admin_model->get_personal($id);
    $skill = $this->admin_model->get_skill($id);
    $lang = $this->admin_model->get_language($id);
    $work = $this->admin_model->get_work($id);
    $uni = $this->admin_model->get_uni($id);

    require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('TCPDF Example 002');
    $pdf->SetSubject('TCPDF Tutorial');
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
    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
      require_once(dirname(__FILE__) . '/lang/eng.php');
      $pdf->setLanguageArray($l);
    }

    // ---------------------------------------------------------

    // set font
    $pdf->SetFont('times', '', '18');

    // add a page
    $pdf->AddPage();



    // create some HTML content
    $html1 = '<h1 align="center" style="color:black;">&nbsp;<span style="color:white;">...</span>&nbsp; Madhu &nbsp;<span style="color:orange;">Shankari</span>&nbsp;</h1>';
    // output the HTML content
    $pdf->writeHTML($html1, true, false, true, false, '');

    // create some HTML content
    $pdf->SetFont('times', '', '10');
    $html2 = '
           <ol type = "none">
           <li align="center">234567</li>
           <li align="center">abc@gmail.com</li>
           <li align="center">no.24,street,Negombo,Srilanka.</li>
           </ol>';

    // output the HTML content
    $pdf->writeHTML($html2, true, false, true, false, '');

    // create some HTML content
    $pdf->SetFont('times', '', '10');
    $html3 = '
    <h1 style="color:orange;">Skills</h1>
       <ul>
            <li>Project management</li>
            <li>Strong decision</li>
            <li>Complex problem solver</li>
            <li>Creative Design</li>
            <li>Innovative</li>
        </ul>
        <br/>
        <hr />

    <h1 style="color:orange;"> Education Qualification</h1>
    <ul>   <li><h3><b>W3Schools.com</b></h3></li>
            <h4>Forever</h4>
                <p>Web Development! All I need to know in one place</p>
 

 
         <li><h3><b>London Business School</b></h3></li>
            <h4>2013 - 2015</h4>
               <p>Master Degree</p>
   

        <li><h3><b>School of Coding</b></h3></li>
            <h4>2010 - 2013</h4>
               <p>Bachelor Degree</p>
    </ul>
    <br/>
    <hr />


    <h1 style="color:orange;">Work Experience</h1>
    <ul type="disco">
        <h3>
           <li><b>Front End Developer / w3schools.com</b></li>
        </h3>
        <h4>
            Jan 2015 -
            <span>Current</span>
        </h4>
        <p>
          Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in
          deserunt aspernatur est reprehenderit sunt hic. Nulla tempora
          soluta ea et odio, unde doloremque repellendus iure, iste.
        </p>
        <br/>
        <h3>
            <li><b>Web Developer / something.com</b></li>
        </h3>
        <h4>Mar 2012 - Dec 2014</h4>
        <p>
         Consectetur adipisicing elit. Praesentium magnam consectetur vel
         emque repellendus iure, iste.
        </p>
            
        <h3>
            <li><b>Graphic Designer / designsomething.com</b></li>
        </h3>
        <h4>Jun 2010 - Mar 2012</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <br />
        <hr/
    </ul> ';

    // output the HTML content
    $pdf->writeHTML($html3, true, false, true, false, '');
    $html4 = '<h1 style="color:orange;">Languages</h1>
        <div style="display:flex;">
        <ul style="display:flex;">
            <li>English</li>
            <li>Tamil</li>
            <li>Sinhalaa</li>
        </ul>
        </div';
    $pdf->writeHTML($html4, true, false, true, false, '');



    // ---------------------------------------------------------

    //Close and output PDF document
    $pdf->Output('example_006.pdf', 'I');

    //============================================================+
    // END OF FILE
  }
  public function downloadPdf2($id)
  {
    $this->load->model('admin_model');
    $pers = $this->admin_model->get_personal($id);
    $skill = $this->admin_model->get_skill($id);
    $lang = $this->admin_model->get_language($id);
    $work = $this->admin_model->get_work($id);
    $uni = $this->admin_model->get_uni($id);

    require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

    // Include the main TCPDF library (search for installation path).


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
    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
      require_once(dirname(__FILE__) . '/lang/eng.php');
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
                      <dd>3456734567</dd>
                    <dt>  Email:</dt>
                      <dd>abc@gmail.com</dd>
                    <dt>  Address:</dt>
                      <dd>34,mainstreet,<br/>Colombo</dd>
                 </dl>
                 

                 <b><h2>  Education</b><br/><hr/>
                 <dl>
                   <dt>  W3Schools.com :</dt>
                      <dd>Forever <br/> Web Development! All I need to know in one place</dd>
                    <dt>  London Business School:</dt>
                      <dd>2013 - 2015 <br/> Master Degree</dd>
                    <dt>  School of Coding:</dt>
                      <dd>2010 - 2013<br/>Bachelor Degree</dd>
                 </dl>
                 
                
                 <b><h2>  Skills</b><br/><hr/>
                 <ul>
                   <li>Project management</li>
                   <li>Strong decision</li>
                   <li>Complex problem solver</li>
                   <li>Creative Design</li>
                   <li>Innovative</li>
                 </ul>
                

                 <b><h2>  Language</b><br/><hr/>
                 <ul>
                   <li>English</li>
                   <li>Tamil</li>
                   <li>Sinhala</li>
                 </ul>
                 <br/>';

    $right_column = '<b><strong><h1 align="left" style="color:#040224;">  Madhushankari <span style="color:#040224;">Kugan</span></h1></strong></b></br><h3 style="color:#251780;">  Software Engineer</h3>
                <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in
                   deserunt aspernatur est reprehenderit sunt hic. Nulla tempora
                   soluta ea et odio, unde doloremque repellendus iure, iste werty ertg wertyu wertyu asdfrtghyuj.<br/>
                </p>

    <b><h3>  Experience</b></h3><br/><hr/>
        <ul type="disco">
        <h3>
           <li><b style="color:#251780;">Front End Developer / w3schools.com</b></li>
        </h3>
        Jan 2015 - Current |  
            <span>  Company Name</span>
        <p>
          Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in
          deserunt aspernatur est reprehenderit sunt hic. Nulla tempora
          soluta ea et odio, unde doloremque repellendus iure, iste.
        </p>
        

        <h3>
            <li><b style="color:#251780;">Web Developer / something.com</b></li>
        </h3>
        Mar 2012 - Dec 2014 |
            <span>  Company Name</span>
        <p>
         Consectetur adipisicing elit. Praesentium magnam consectetur vel
         emque repellendus iure, iste.
        </p>
            

        <h3>
            <li><b style="color:#251780;">Graphic Designer / designsomething.com</b></li>
        </h3>
        Jun 2010 - Mar 2012 |
             <span>  Company Name</span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <br />
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

    // set color for text
    $pdf->SetTextColor(8, 2, 48);

    // write the second column
    $pdf->writeHTMLCell(125, 261, '', '', $right_column, 1, 1, 1, true, 'J', true);

    // reset pointer to the last page
    $pdf->lastPage();

    // ---------------------------------------------------------

    //Close and output PDF document
    $pdf->Output('example_007.pdf', 'I');

    //============================================================+
    // END OF FILE
  }
}
