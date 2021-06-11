<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "programmatic/head.php" ?>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <title>International Admissions 2021 | Amrita Vishwa Vidyapeetham</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" href="https://www.amrita.edu/sites/default/files/amrita-new-favicon.ico" type="image/vnd.microsoft.icon" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css" />
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!------Google Font------------->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
      <!---------Owl Slider---------------->
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- javascript -->
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script>
   </head>
   <body>
     <?php include "programmatic/body.php" ?>
      <section class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <img src="img/logo.svg">
               </div>
            </div>
         </div>
      </section>
      <section class="intro" id="mobile_blk">
         <div class="container">
            <div class="row" style="align-items: center;">
               <div class="col-lg-8">
                  <div class="row beginning_blk">
                     <div class="col-md-12">
                        <img style="width:100%;" src="img/front-view-male-student-mobile-version.png">
                        <h3>Beginnings<br> of <br>
                           Endless<br> Possibilities
                        </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>4th</h4>
                        <p>Best University<br>
                           in India
                        </p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>800+</h4>
                        <p>Ph.D. Faculty</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>200+</h4>
                        <p>Companies Visit</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>20250+</h4>
                        <p>Students</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>16.5</h4>
                        <p>Highest CTC/ <br>Salary</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>207</h4>
                        <p>Programs</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <form id="enquire_form" class="enquire_form" name="enquire_form" id="enquire_form" action="send_mail.php" method="POST" enctype="multipart/form-data">
                     <h3 class="h4 text-black form_ti">Enquiry <br>Now</h3>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name *" name="student_name" required="" autocomplete="off">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-lg-6 country_code_blk">
                              <select class="form-control" id="exampleFormControlSelect1" name="country_code" required="">
                                 <option value="" disabled="" selected="">Country Code *</option>
                                 <option value="+977">Nepal - +977</option>
                                 <option value="+94">Sri Lanka - +94</option>
                                 <option value="+880">Bangladesh - +880</option>
                                 <option value="+975">Bhutan -  +975</option>
                                 <option value="+93">Afghanistan - +93</option>
                                 <option value="+62">Indonesia - +62</option>
                                 <option value="+60">Malaysia - +60</option>
                                 <option value="+95">Myanmar - +95</option>
                                 <option value="+91">India - +91</option>
                                 <option value="Others">Others: My Country</option>
                              </select>
                           </div>
                           <div class="col-lg-6">
                              <input type="tel" class="form-control" id="quantity" name="phnumber" pattern="\d{10}" placeholder="Mobile No *" required="">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="best_time_to_contact_you">
                           <option value="" disabled="" selected="">Best Time To Call</option>
                           <option value="Morning - 9am to 12pm">Morning - 9am to 12pm</option>
                           <option value="Afternoon - 12pm to 4pm">Afternoon - 12pm to 4pm</option>
                           <option value="Evening - 4pm to 7pm">Evening - 4pm to 7pm</option>
                           <option value="Late - 7pm to 9pm">Late - 7pm to 9pm</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="country" required="">
                           <option value="" disabled="" selected="">Select Country *</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Afghanistan">Afghanistan</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="India">India</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bonaire">Bonaire</option>
                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Canary Islands">Canary Islands</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Channel Islands">Channel Islands</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos Island">Cocos Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote DIvoire">Cote DIvoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Curaco">Curacao</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Ter">French Southern Ter</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Great Britain">Great Britain</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Hawaii">Hawaii</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="India">India</option>
                           <option value="Iran">Iran</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea North">Korea North</option>
                           <option value="Korea Sout">Korea South</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Laos">Laos</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libya">Libya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macau">Macau</option>
                           <option value="Macedonia">Macedonia</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Midway Islands">Midway Islands</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Nambia">Nambia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherland Antilles">Netherland Antilles</option>
                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                           <option value="Nevis">Nevis</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau Island">Palau Island</option>
                           <option value="Palestine">Palestine</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Phillipines">Philippines</option>
                           <option value="Pitcairn Island">Pitcairn Island</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                           <option value="Republic of Serbia">Republic of Serbia</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="St Barthelemy">St Barthelemy</option>
                           <option value="St Eustatius">St Eustatius</option>
                           <option value="St Helena">St Helena</option>
                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                           <option value="St Lucia">St Lucia</option>
                           <option value="St Maarten">St Maarten</option>
                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                           <option value="Saipan">Saipan</option>
                           <option value="Samoa">Samoa</option>
                           <option value="Samoa American">Samoa American</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syria">Syria</option>
                           <option value="Tahiti">Tahiti</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania">Tanzania</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Erimates">United Arab Emirates</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uraguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Vatican City State">Vatican City State</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Vietnam">Vietnam</option>
                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                           <option value="Wake Island">Wake Island</option>
                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zaire">Zaire</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select class="form-control" id="programme" name="programme" required="">
                           <option value="" disabled="" selected="">Programme</option>
                           <option value="B Com">B Com</option>
                           <option value="BA">BA</option>
                           <option value="Bachelor">Bachelor</option>
                           <option value="BBA">BBA </option>
                           <option value="BCA">BCA</option>
                           <option value="BFA">BFA</option>
                           <option value="BSc">BSc</option>
                           <option value="BSc (Hons)">BSc (Hons)</option>
                           <option value="Btech">Btech</option>
                           <option value="M Com">M Com</option>
                           <option value="MA">MA</option>
                           <option value="Master">Master</option>
                           <option value="MBA">MBA</option>
                           <option value="MCA">MCA</option>
                           <option value="MFA">MFA</option>
                           <option value="MSc">MSc</option>
                           <option value="MSW">MSW</option>
                           <option value="Mtech">Mtech</option>
                           <option value="Nanosciences">Nanosciences</option>
                           <option value="PG Dilpoma">PG Dilpoma</option>
                           <option value="PhD">PhD</option>
                        </select>
                     </div>
                     <div class="form-group">
						<select id="programme_branch" class="form-control" name="programme_branch" required="">
								<option value="0">Select Branch*</option>
						</select>
                     </div>
                     <div class="form-group">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="hidden" name="utm_campaign" value="">
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-pill submit_button" value="Submit">
                     </div>
                     <p class="short">Our career advisor will get in touch with you based on the information provided here.</p class="short">
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!--       <section class="intro" id="desktop_blk">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row beginning_blk">
                     <div class="col-md-12">
                        <h3>Beginnings<br> of <br>
                           Endless<br> Possibilities
                        </h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>4th</h4>
                        <p>Best University<br>
                           in India
                        </p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>800+</h4>
                        <p>Ph.D. Faculty</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>200+</h4>
                        <p>Companies Visit</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>20250+</h4>
                        <p>Students</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>16.5</h4>
                        <p>Highest CTC/ <br>Salary</p>
                     </div>
                     <div class="col-6 col-sm-6 col-lg-2 finder_icos">
                        <h4>207</h4>
                        <p>Programs</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <form id="enquire_form" class="enquire_form" name="enquire_form" id="enquire_form" action="send_mail.php" method="POST" enctype="multipart/form-data">
                     <h3 class="h4 text-black form_ti">Enquiry <br>Now</h3>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="student_name" required="" autocomplete="off">
                     </div>
                     <div class="form-group">
                        <input type="tel" class="form-control" id="quantity" name="phnumber" pattern="\d{10}" placeholder="Mobile No" required="">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                     </div>
                     <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="programme" required="">
                           <option value="" disabled="" selected="">Programme</option>
                           <option value="BBA">BBA</option>
                           <option value="BCA">BCA</option>
                           <option value="MBA">MBA</option>
                           <option value="MCA">MCA</option>
                           <option value="MCA - Artificial Intelligence">MCA - Artificial Intelligence</option>
                           <option value="MCA - Cybersecurity">MCA - Cybersecurity</option>
                           <option value="Mahabharata Upanayanam">Mahabharata Upanayanam</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select id="programme_branch_mob" class="form-control" name="programme_branch_mob">
                           <option value="0">Select Branch*</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="hidden" name="utm_campaign" value="">
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-pill submit_button" value="Submit">
                     </div>
                     <p class="short">Our career advisor will get in touch with you based on the information provided here.</p class="short">
                  </form>
               </div>
            </div>
         </div>
         </section> -->
      <section class="menu-section" id="navbar">
         <div class="container">
            <div class="row" style="align-items: center;">
               <div class="col-lg-9">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="#"><img style="width: 15px;" src="img/home-stroke.svg"></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" href="#dual-dgree">Training</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#scholarship">Scholarship</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#join-amrita">Join Amrita</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#accordion_two_section">Faq</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-lg-3 text-right">
                  <a href="#enquire_form" id="admission-enq" class="btn btn-primary btn-pill">ADMISSION -2021</a>
               </div>
            </div>
         </div>
      </section>
      <section class="intro-about">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Success starts <br>at Amrita</h2>
                  <p>At Amrita, we take a thoughtful, comprehensive and modern approach to education that aligns with core traditional values. We model our programs and initiatives to help students achieve true potential. Creativity and curiosity are encouraged; to impart a new outlook on the world, its emerging possibilities or to solve the pressing problems in the communities around us. Endless learning opportunities, impactful research, expert mentoring and global exposure help cut the pathway to success tagged with enhanced skills and employability.</p>
               </div>
               <div class="col-lg-6">
                  <div class="videos">
                     <video class="video-fluid ahead_intro_video" autoplay="" muted="" loop="" controls="" style="width: 100%;">
                        <source src="img/start-your-journey-with-amrita-international-admissions-open.mp4" type="video/mp4">
                     </video>
                  </div>
               </div>
               <!-- <div class="col-lg-5">
                  <div class="videos">
                     <a target="blank" href="https://www.youtube.com/watch?v=omp4M5GYiTs&ab_channel=AmritaVishwaVidyapeetham" class="video">
                     <span></span>
                     <img src="img/video-thumb.jpg" />
                     </a>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <section class="bg-university">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <img style="width: 100%;" src="img/student.png" alt="lady-image">
               </div>
               <div class="col-lg-7 lady-right-text">
                  <h2>STUDY FROM A TOP <br>PHARMA COLLEGE OF INDIA</h2>
                  <p>Amrita School of Pharmacy is ranked 1st in India among all the private universities by The WUR 2020(World University Ranking). Also in the 2020 edition of Annual rankings that featured universities from 70 countries, Amrita Vishwa Vidyapeetham was placed in a list of 601-800 category. Amrita’s campus gives its students an exclusive opportunity to be a part of a program that helps them excel in every way possible. </p>
                  <!-- <img style="width: 100%;" src="img/ranking.jpg"> -->
               </div>
            </div>
         </div>
      </section>
      <section class="programme-list">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2>No. <span style="font-family: 'Roboto', sans-serif;">1</span> in India, <br>Top <span style="font-family: 'Roboto', sans-serif;">100</span> in the World</h2>
                  <p class="sub_rank">THE Impact Rankings - the only global indicators to assess universities' progress towards the UN's 17 Sustainable Development Goals (SDG), has ranked Amrita as No.1 in India and 81st in the world. It's an acknowledgement of the University's commitment to remain an exemplary institution that creates Global Impact on Society. Amrita has also been selected by the Indian Government as an Institution of Eminence to be developed into a world-class institution which would put India on the global education map.</p>
                  <div class="row listing_blk">
                     <div class="col-lg-3 col-sm-6">
                        <div class="bg_mode">
                           <img src="">
                           <p>WES (WES Accridiated) </p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="bg_mode">
                           <img src="https://www.amrita.edu/ahead/images/no1-international-faculty.svg">
                           <p>No 1 International Faculty in India</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6 text-center">
                        <div class="bg_mode">
                           <img style="width: 105px;" src="img/nirf-logo.svg">
                           <p>4<sup>th</sup> Best University in India</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="bg_mode">
                           <img src="https://www.amrita.edu/ahead/images/ranking-no1.svg">
                           <p>No 1 Private University in India</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="bg_mode">
                           <img src="">
                           <p>Institution of Eminence</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="dual-dgree" id="dual-dgree">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-sm-12 dual-text">
                  <h2>Training at </br>World Class Hospital</h2>
                  <p>Amrita School of Pharmacy, an integral part of Amrita Vishwa Vidyapeetham, aspires to be a centre of excellence in Pharmacy education and research, as well as one of the most prestigious medical institutions in the country.  Amrita provides high-quality, value-based education with a strong focus on research and development with our experienced faculty and world-class facilities and infrastructure. The School of Pharmacy strives not only to provide a quality education based on a practical framework but also to expose students to excellent internship and experiential learning opportunities within the institute. Amrita School offers the opportunity to do internships at the Amrita’s very own medical care units. Unlike any other university in India, Amrita being part of a reputable health facility in India, provides its students with internship and job opportunities within their world-class hospital, which is a blend of technology and human values. This gives each student unlimited access and exposure to learning their strengths and weaknesses, under the guidance of Amrita’s excellent professionals.
                  </p>
               </div>
               <div class="col-lg-5 col-sm-12 right-align-image">
                  <img src="img/portrait-happy-young-african-male-student.png">
               </div>
            </div>
         </div>
      </section>
    <!--  <section class="dual_degree_show">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card arizona-01">
                     <img class="card-img-top" src="img/arizona-university.jpg" alt="Card image cap">
                     <div class="card-body left-shade ari">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              2+2 program, Amrita students will complete their first two years at Amrita and the next two<span class="dots">...</span>
                              <span class="more" style="display: none;">years students will take up Arizona courses being at Amrita, students have an option to travel to University campus Tucson and complete the course. In one of the following specializations in Mechanical Engineering and ECE.</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card kth-02">
                     <img class="card-img-top" src="img/kth-university.jpg" alt="Card image cap">
                     <div class="card-body right-shade kth">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              Integrated three Years in Amrita and two years at KTH. After five years students will be<span class="dots">...</span>
                              <span class="more" style="display: none;">awarded BE from Amrita and a Master’s degree from KTH in one of the following specializations: Electrical and Electronics Engineering (EEE), Electronics and Communications Engineering (ECE), Electronics and Instrumentation Engineering (EIE), Computer Science and Engineering (CSE), Mechanical Engineering, Chemical Engineering.</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card twente-03">
                     <img class="card-img-top" src="img/twe-university.jpg" alt="Card image cap">
                     <div class="card-body left-shade twe">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              3+2 program, Amrita students will complete their first three years at Amrita and the<span class="dots">...</span>
                              <span class="more" style="display: none;">next two years at University of Twente. After five years students will be awarded a Bachelor’s degree in Engineering from Amrita and a Master’s degree from University of Twente in Master’s I-TECH degree</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card vu-04">
                     <img class="card-img-top" src="img/vu-university.jpg" alt="Card image cap">
                     <div class="card-body right-shade vu">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              1+1 program, Amrita students will complete their first year at Amrita and the next year at (VU).<span class="dots">...</span>
                              <span class="more" style="display: none;">After two years students will be awarded a Master’s degree in Engineering from Amrita and a Master’s degree from VU.</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card nan-05">
                     <img class="card-img-top" src="img/nan-university.jpg" alt="Card image cap">
                     <div class="card-body left-shade nan">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              3+1+1 program, Amrita students will receive their B. Tech degree from Amrita and complete<span class="dots">...</span>
                              <span class="more" style="display: none;">their fourth year at École Centrale Nantes. They subsequently gain admission into the two-year master's program at ECN.</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 university_blk">
                  <div class="card mx-06">
                     <img class="card-img-top" src="img/mx-university.jpg" alt="Card image cap">
                     <div class="card-body right-shade mx">
                        <div class="verticals">
                           <button class="btnMoreLess" type="button" style="font-size: 24px; color: #61C8E0">
                           <i class="iMoreLess fa fa-chevron-down"></i>
                           <span class="lblText"></span>
                           </button>
                           <p class="stick_para">
                              Selected students can do their four year B.Tech at Amrita and complete their one year MS<span class="dots">...</span>
                              <span class="more" style="display: none;"> at the University of New Mexico (UNM), USA. Students will subsequently be awarded a B.Tech from Amrita and an M.S. from UNM in the following specializations: Mechanical, Chemical, Civil, Construction, Computer Science, Biological, Nuclear, Aerospace, Electrical, Electronics, and Computer Engineering.</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>-->
      <section class="scholarship" id="scholarship">
         <div class="container">
            <div class="row" style="align-items: center;">
               <div class="col-lg-4 col-sm-12 lady_crete">
                  <h3>Placements in <br>Global Pharma Cos.</h3>


                  <a id="apply-btn" href="#enquire_form">Apply Now</a>
               </div>
               <div class="col-lg-4 col-sm-12 text-center">
                  <img style="width: 100%;" alt="student-image" src="img/waist-up-shot-pretty-girl-smiles-pleasantly.png">
               </div>
               <div class="col-lg-4 col-sm-12 scholar_ship">
                  <p>Being a student at a top pharma college like the Amrita School of Pharmacy, they are endowed with a lot of placement opportunities. This prestigious pharmacy school can only give you a better opportunity at a wonderful career, from firms like Sun Pharma, Dr Reedy's, Biocon, and Rhizen Pharmaceuticals to multinational corporations like Akeiss, Novo Nordisk,  GSK and Mylan.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="key-differentiators">
         <h2>Key <br>Differentiators</h2>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/ranking-05.svg">
                  <p>Outstanding faculty<br> from India and abroad</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/ranking-07.svg">
                  <p>Industry-aligned<br>curriculum</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/world.svg">
                  <p>Programmes Recognised<br> Across the World</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/internship.svg">
                  <p>Industry Intensive Summer/Winter Internships<br> in U.S. and Europe</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/recruitment.svg">
                  <p>Placements at 500+ Top Multinational Companies<br> - Google, Intel, Microsoft, Amazon, IBM etc..</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/best-seller.svg">
                  <p>Training for Global Competitions - Compete with the World's Best.</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/lab-tool.svg">
                  <p>Industry Sponsored Labs for Hands-on<br> Training and Experience.</p>
               </div>
               <div class="col-lg-3 col-12 col-sm-6 text-center">
                  <img style="width:64px; height: 64px;" src="img/mortarboard.svg">
                  <p>Fully funded PhD Opportunities <br>under World Renowned Professors.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="join-amrita" id="join-amrita">
         <h2>Join Amrita</h2>
         <p>Following these steps can help make your<br> application experience simple and<br> straightforward.</p>
         <div class="container">
            <div class="row">
               <div class="col-md-12 join_grp">
                  <div class="md-stepper-horizontal orange">
                     <div class="md-step active">
                        <div class="md-step-circle"><span><img style="width: 60px;" src="img/lens-ico.svg"></span></div>
                        <div class="md-step-title">Choose a Program</div>
                        <div class="md-step-bar-left"></div>
                        <div class="md-step-bar-right"></div>
                     </div>
                     <div class="md-step active">
                        <div class="md-step-circle"><span><img style="width: 60px;" src="img/clarity-ico.svg"></span></div>
                        <div class="md-step-title">Apply Online</div>
                        <div class="md-step-bar-left"></div>
                        <div class="md-step-bar-right"></div>
                     </div>
                     <div class="md-step">
                        <div class="md-step-circle"><span><img style="width: 60px;" src="img/fluent-ico.svg"></span></div>
                        <div class="md-step-title">Speak to Admissions<br> Consultant</div>
                        <div class="md-step-bar-left"></div>
                        <div class="md-step-bar-right"></div>
                     </div>
                     <div class="md-step">
                        <div class="md-step-circle"><span><img style="width: 60px;" src="img/person-ico.svg"></span></div>
                        <div class="md-step-title">Join the <br>Program</div>
                        <div class="md-step-bar-left"></div>
                        <div class="md-step-bar-right"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section>
         <div class="container">
            <div class="testimonial-card">
               <div class="text">Lorem ipsum dolor sit amet consectetur elit. Ipsa voluptatum ipsum, laudantium minima aliquam porro? Iste,  Et, esta ah <i class="fas fa-quote-right quote">
               </i>
               </div>
               <div class="footer">
                  <div class="image">

                  </div>
                  <h3 class='person'>Jane Doe</h3>
               </div>
            </div>
         </div>
         </section> -->
      <section class="testimonoals"  id="demos">
         <h2>Testimonials</h2>
         <br>
         <br>
      </section>
      <section class="testimonoals"  id="demos">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">Experienced faculties and good laboratory facilities. International division keep in touch with us every time and help us in all personal matters; especially taking care of us during this Corona Pandemic.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-01">
                              </div>
                              <h3 class='person'>Andawaththa Kankanamge, Sri Lanka</h3>
                              <p>M.Sc Microbiology 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">Amrita University is a great place with great infrastructure including workshops, libraries, labs and some of the finest sports amenities. I recommend everyone to join Amrita if he or she is looking for a better future.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-02">
                              </div>
                              <h3 class='person'>Isabwe Emmy, Rwanda</h3>
                              <p>B. Tech - Civil Engineering, 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">I had applied through the Study In India Program. I chose Amrita University as it has a huge reputation for being the best in both academics and research. University is unique in its efforts to help us provide best in class education and helping us build a strong career.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-03">
                              </div>
                              <h3 class='person'>Pravin Kumar Sah, Janakpur, Nepal</h3>
                              <p>B. Tech - Electronics and Communications</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">I feel like, being in the right road that will take me to my dreams. Before coming here, I didnt expect that I would get this kind of caring and affection. The support and encouragement I get all the time, make me feel at home.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-04">
                              </div>
                              <h3 class='person'>Frezewd Tsegaye, Ethiopia</h3>
                              <p>B. Tech - Electronics and Communications</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">Amrita was my first choice on a long list of foreign universities I wished to enroll. I was blessed enough to be accepted, and the last two years have been genuinely inspiring. Everyone, from the students to the college staff, is friendly and will help you adapt to this new environment.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-05">
                              </div>
                              <h3 class='person'>Veerasamy Sevagen, Mauritius</h3>
                              <!-- <p>B. Tech - Electronics and Communications</p> -->
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimonial-card">
                           <div class="text">For me, studying at Amrita has given a plenty full of opportunities to explore and engage on. From academics to extracurricular activities, I get to take full advantage  and use all the facilities available here.<i class="fa fa-quote-left quote" aria-hidden="true"></i>
                           </div>
                           <div class="testi_img_plk">
                              <div class="profile-image-06">
                              </div>
                              <h3 class='person'>Sahara Pantam, Nepal</h3>
                              <p>B. Sc. (Hons.) Agriculture</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="accordion_two_section ptb-100" id="accordion_two_section">
         <h2>FREQUENTLY ASKED QUESTIONS</h2>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 accordionTwo">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0">
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           <a class="card-title">
                           How do I obtain a degree equivalency certificate?
                           </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>The Association of Indian Universities (AIU) is the central office from which all international students need to obtain an equivalency degree certificate from the government of India. Students are required to a) fill out an application form, b) get all English translated education certificates, passport copies, visa copies, national id proof, etc. signed and attested by an officer (gazetted officer) at the closest Indian embassy in your home country, and c) pay the required fees of Rs. 12,000 (Rupees Twelve Thousand Only). One option is to take out a demand draft from your bank written to ‘Association of Indian Universities, New Delhi’ or By ECS/RTGS. Instructions are provided on page 3 of the application form.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           <a class="card-title">
                           What type of visa should I have to study at Amrita?
                           </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>We require all students to acquire a student visa to officially become a full-time degree student at Amrita. We cannot accept students who come on a tourist visa.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                           <a class="card-title">
                           Where can I get the student visa?
                           </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>Student visas can be obtained from any of the Indian embassies in your home country.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                           <a class="card-title">
                           How much is the student visa fee?
                           </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>The student visa fee depends on the nationality of the passport holder and type/duration of the visa for which you have applied. Please check with the Indian embassy in your home country for the exact visa fee.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                           <a class="card-title">
                           What should I do when I arrive in India?
                           </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>Once you have rested and gotten in touch with the Amrita Center for International Programs, it is imperative that you register with the local Foreigners Regional Registration Officer (FRRO) within 14 days of arrival if you have come to India on a Student or a Research Visa and plan to stay more than 2 months (60 days). Registration facilities are not provided at the airport but in the office of FRROs or District Superintendents of Police. A member of the Amrita Center for International Programs can accompany students to the local FRRO but all transportation charges must be paid by students.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                           <a class="card-title">
                           What should I do for an extension of my student visa?
                           </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>In case you want to get your student visa extended, you should come to the Amrita Center for International Programs where we will coordinate with local Foreigners Regional Registration Officer (FRROs)/ District Superintendents of Police (FROs) with authentic certificates, proof of adequate financial standing, etc. The visa can be extended for a period of one year at a time up to the duration of the course or 5 years (whichever is less for students pursuing full time without any penalties standing against the student). This is a complete online process and students have to fill the online FRRO extension form and then visit the FRRO office to show the certificates and collect the FRRO.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                           <a class="card-title">
                           What are the formalities if I just want to visit my home country during my vacation or other such cases?
                           </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>You must have a valid Indian visa to visit your home country. Once you have a valid visa then you can apply for the return exit permit online and collect it from the FRRO office. It is very important that you carry the exit permit as this is required to be produced at airport immigration.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                           <a class="card-title">
                           I have made the provisional fee payment. When should I pay my balance fee? Should I pay it in instalments?
                           </a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>In case you have not yet submitted your complete Tuition and Accommodation fee, kindly submit it before reporting at the University and send us the payment transfer proof. You should also carry the payment transfer proofs along with you. You will not be allowed to start your classes until the complete semester tuition fee and annual fee for accommodation is paid.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                           <a class="card-title">
                           What should I bring with me?
                           </a>
                        </div>
                        <div id="collapseTen" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>It is highly recommended that students have the following with them: In case you have not yet submitted your complete Tuition and Accommodation fee, kindly submit it before reporting at the University and send us the payment transfer proof. You should also carry the payment transfer proofs along with you. You will not be allowed to start your classes until the complete semester tuition fee and annual fee for accommodation is paid.In addition, students should also bring *Most of these items can be obtained after reaching India but it is advised that students come prepared.</p>
                              <ul>
                                 <li>Filled application form</li>
                                 <li>Both original and xerox copies of educational certificates translated into English</li>
                                 <li>Bank statement - last three months</li>
                                 <li>Fees payment receipt</li>
                                 <li>Passport</li>
                                 <li>Passport size photographs (10)</li>
                                 <li>Student visa</li>
                                 <li>Medical Certificate</li>
                                 <li>National ID Card (both original and xerox copies)</li>
                                 <li>Indian Rupees - should change the national currency in the Indian airports</li>
                                 <li>Indian Sim Card - should buy from the airport</li>
                                 <li>Should carry the Yellow Fever Injection Card and Polio Drop Certification if you are traveling from Africa. *Should carry this in the hand luggage as it will be required at the airport for immigration</li>
                                 <li>Admission letter</li>
                                 <li>International medical insurance (valid in India) for the complete duration of the program. *Before arriving at the Amrita, all international students will have to take out an international insurance policy to cover expenses arising from medical treatment and accidents. The cost of this insurance will be paid by the students themselves. Students need to provide proof of having taken out an insurance policy from their home country before leaving. Failure to do so will exclude them from admission at the university. The insurance certificate/ letter also assures Amrita that you are medically fit to pursue the course before you leave your home country.</li>
                                 <li>Medicine</li>
                                 <li>Cotton clothes</li>
                                 <li>Light rain jacket</li>
                                 <li>Sunglasses</li>
                                 <li>Umbrella</li>
                                 <li>Mosquito repellent/net</li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                           <a class="card-title">
                           Is there a dress code for students?
                           </a>
                        </div>
                        <div id="collapseEleven" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>Yes. Amrita is fairly strict about the way students dress. It is imperative that all students dress modestly and abide by the customs and norms observed by the institution. Jeans, short tops, short shorts, short skirts, tank tops, overly tight clothes, or torn clothes are NOT allowed to be worn by male or female students.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                           <a class="card-title">
                           How do I open a bank account?
                           </a>
                        </div>
                        <div id="collapseTwelve" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>To open an account, you need to bring your original passport and visa, self-attested copies of your passport with proof of address in your home country, passport size photographs (minimum 3), self-attested copies of your visa, and FRO form</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">
                           <a class="card-title">
                           How do I get a cell phone connection?
                           </a>
                        </div>
                        <div id="collapseFourteen" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>The Center for International Programs will aid you in applying for and acquiring a sim card (also can buy the Indian sim in the airport after your arrival) but you need to purchase your phone separately. Please bring copies of your passport, proof of address in India (hostel/guest house), and passport size photographs.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">
                           <a class="card-title">
                           How do I get a data card (Internet) for my laptop?
                           </a>
                        </div>
                        <div id="collapseFifteen" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>The Center will aid you in applying for and acquiring a wifi for your laptop. Internet will be provided in classrooms and Wi-Fi is available in campuses. If you wish, however, to have 24/7 internet access on your laptop, it would be beneficial to purchase a data card. Please bring copies of your passport, visa copy and passport size photographs.</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">
                           <a class="card-title">
                           What is the typical voltage rating in India?
                           </a>
                        </div>
                        <div id="collapseSixteen" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>220VAC, 50 Hz</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">
                           <a class="card-title">
                           Who do I contact if I have any problems, concerns, or questions?
                           </a>
                        </div>
                        <div id="collapseSeventeen" class="collapse" data-parent="#accordion" >
                           <div class="card-body">
                              <p>You can call the Amrita Center for International Programs.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end of /.container-->
      </section>
      <section class="admission-sec">
         <div class="container">
            <div class="row" style="align-items: center;">
               <div class="col-lg-6 text-right">
                  <p>Admission open for 2021</p>
               </div>
               <div class="col-lg-6 apply_big">
                  <a href="#enquire_form">Apply Now</a>
               </div>
            </div>
         </div>
      </section>
      <section class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <img src="img/logo-colored.svg">
                  <!-- <p class="footer_social">
                     <a href="https://www.facebook.com/AmritaUniversity" target="blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                     <a href="https://twitter.com/AMRITAedu" target="blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                     <a href="https://www.youtube.com/user/AmritaUniversity" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                     <a href="https://www.linkedin.com/school/amrita-vishwa-vidyapeetham-official/" target="blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                     </p> -->
               </div>
            </div>
         </div>
      </section>
      <section class="site-info">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <p>© 2021 Amrita Vishwa Vidyapeetham. All Rights Reserved. </p>
               </div>
            </div>
         </div>
      </section>
      <a href="#enquire_form" onclick="topFunction()" id="myBtn" title="Enquire Now">Enquire Now</a>
      <button class="gotop" onclick="topFunction()" id="myBtn" title="Enquire Now"><i class="fa fa-arrow-up" aria-hidden="true"></i>
      </button>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/56daef3994.js"></script>
      <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $(function() {
             $.support.cors = true;
                         //const scriptURL = 'https://script.google.com/macros/s/AKfycbzXaX2Rfw2YsgRaeZdwFitXYpNQAQEb-U_mTao0MivkYl-xqxE/exec';
                         const scriptURL = "https://script.google.com/macros/s/AKfycbwJ8dDM8tqwtDFubaJyuCNI7xJEGqFRulTAIhrX-NlnCEVXduxO/exec";
                       const form = document.forms['enquire_form']

                         $('#enquire_form').submit(function(e){
                           e.preventDefault();
           //Submit utm values...
         var source1, content1, campaign1;

             var x = location.href;
         var fetchBody = new FormData(form);

             if (window.location.href.indexOf("utm_source") > -1) {
              $.urlParam = function (name) {
          var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.search);
          return (results !== null) ? results[1] || 0 : false;
         }
         source1 = $.urlParam('utm_source');//source
         fetchBody.append('utm_source',source1);

         }
         if (window.location.href.indexOf("utm_content") > -1) {
              $.urlParam = function (name) {
                                        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.search);                    return (results !== null) ? results[1] || 0 : false;
         }
              content1 = $.urlParam('utm_content');//content
         fetchBody.append('utm_content',content1);

          }
          if (window.location.href.indexOf("utm_campaign") > -1) {
              $.urlParam = function (name) {
          var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.search);
          return (results !== null) ? results[1] || 0 : false;
         }
          campaign1 = $.urlParam('utm_campaign');//campaign
         fetchBody.append('utm_campaign',campaign1);
          }
                           $(this).find('input[type=submit]').attr("disabled", true).hide().remove();


                           fetch(scriptURL, { method: 'POST', body: fetchBody})
                             .then(response => console.log('Success!', response))
                             .catch(error => console.error('Error!', error.message))
                             setTimeout(() => { // hide after three seconds
                                 document.getElementById('enquire_form').submit();
                               }, 500);
                         });
                     });
      </script>
      <script>
         jQuery(document).ready(function() {
           jQuery('.owl-carousel').owlCarousel({
             loop: true,
             autoplay:true,
             dots: false,
             margin: 10,
             responsiveClass: true,
             responsive: {
               0: {
                 items: 1,
                 nav: true
               },
               600: {
                 items: 1,
                 nav: false
               },
               1000: {
                 items: 3,
                 nav: true,
                 loop: false,
                 margin: 20
               }
             }
           })
         })
      </script>
      <script type="text/javascript">
         /*Sticky Scroll Top Menu */
         window.onscroll = function() {myFunction()};

         /* Go to Top Button - Footer */
         var mybutton = document.getElementById("myBtn");

         var navbar = document.getElementById("navbar");
         var sticky = navbar.offsetTop;

         function myFunction() {
          if (window.pageYOffset >= sticky) {
             navbar.classList.add("sticky")
          } else {
             navbar.classList.remove("sticky");
          }

             if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 1500) {
             mybutton.style.display = "block";
             } else {
             mybutton.style.display = "none";
             }
         }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }

         var rowBg = '';

         jQuery(function() {
          jQuery("button.btnMoreLess").on('click', function() {
             jQuery(".dual_degree_show .container .row").removeClass(rowBg);
             jQuery(".dual_degree_show .container .row .stick_para .more").hide();
             if(jQuery(this).find(".iMoreLess").hasClass("fa-chevron-up")) {
                jQuery(this).parents().closest(".university_blk").find(".more").hide(10);
                jQuery(this).find(".iMoreLess").removeClass("fa-chevron-up");
             } else {
                jQuery(".dual_degree_show .container .row").find(".iMoreLess").removeClass("fa-chevron-up");
                jQuery(this).parents().closest(".university_blk").find(".more").show(10);
                jQuery(this).find(".iMoreLess").addClass("fa-chevron-up");
             }
             //jQuery(this).find(".iMoreLess").toggleClass("fa-chevron-up");
             rowBg = jQuery(this).parents().closest(".university_blk").find(".card").attr("class").replace("card ","");
             jQuery(".dual_degree_show").toggleClass(rowBg);
          });
         jQuery("#programme, #programme_mob").change(function () {
            jQuery.ajax({
               "type": "POST",
               "url": "getProgram.php",
               "context" : document.body,
               "data": { course : jQuery(this).val() }
            }).done(function(data){
               document.getElementById("programme_branch").innerHTML=data;
               console.log(data);
               jQuery("select#programme_branch, select#programme_branch_mob").html(data);
            });
         });
         });
      </script>
   </body>
</html>
