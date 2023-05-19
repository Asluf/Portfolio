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
  public function downloadPdf()
  {
    require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->setTitle('Curriculum Vitae');
    $pdf->AddPage();

    // 		$html = <<<EOD
    // <h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
    // <i>This is the first example of TCPDF library.</i>
    // <p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
    // <p>Please check the source code documentation and other examples for further information.</p>
    // <p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
    // EOD;

    $html = "<h1>Welcome to <a href='http://www.tcpdf.org' style='text-decoration:none;background-color:#CC0000;color:black;'>&nbsp;<span style='color:black;'>TC</span><span style='color:white;'>PDF</span>&nbsp;</a>!</h1>
<i>This is the first example of TCPDF library.</i>
<p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
<p>Please check the source code documentation and other examples for further information.</p>
<p style='color:#CC0000;'>TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href='http://sourceforge.net/donate/index.php?group_id=128076'>MAKE A DONATION!</a></p>";



    $w3 = <<<EOF
<body>
    <!-- Page Container -->
   
      <!-- Left Column -->
      <div>
        <div>
          <h2>Jane Doe</h2>
          <div>
            <ul>
              <li>Designer</li>
              <li>London, UK</li>
              <li>ex@mail.com</li>
              <li>1224435534</li>
            </ul>
            <hr />

            <p>
              <b>Skills</b>
            </p>
            <p>Adobe Photoshop</p>
            <div style="width: 90%">90%</div>
            <p>Photography</p>
            <div style="width: 80%">80%</div>
            <p>Illustrator</p>
            <div style="width: 75%">75%</div>

            <p>Media</p>
            <div style="width: 50%">50%</div>
            <br />

            <p>
              <b>Languages</b>
            </p>
            <div>>English</div>
            
            <div>>Spanish</div>
            
            <div>>German</div>
            
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

        <!-- End Right Column -->
      </div>

      
   
  </body>
EOF;


    $pdf->writeHTMLCell(0, 0, '', '', $w3, 0, 1, 0, true, '', true);

    $pdf->Output('example_001.pdf', 'I');
  }
}
