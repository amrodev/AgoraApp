<?php 
 include 'inc/head.php';
?>
    <!-- Intro -->
    <section class="intro" id="intro" data-type="slideshow" data-images=".images-list" data-content=".content" data-to-left=".intro-arrow.left" data-to-right=".intro-arrow.right" data-delay="10">
        
		<!-- Images list -->
        <div class="images-list">
            <img src="images/intro/slideshow-1.jpg" alt="">            
        </div>

        <!-- Content -->
        <div class="container" style="color: black;">
              <div class="teams" >
              <br><br>
              <section class="section" style="padding:3%;" id="skills">
                 <div class="panel panel-primary">
                   <div class="panel-heading">Cards</div>
                   <div class="panel-body">
                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#actioncard">Actions Cards</button>
                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#giftcards">Challenge/Gift</button>
                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#view">View Cards</button>

                         <!-- Modal -->
                        <div class="modal fade" id="actioncard" role="dialog" >
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content" >
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color: black;">Add New Action Card</h4>
                              </div>
                              <form name="savecard" id="savecard" method="post" action="functions/cards_functions.php">
                              <div class="modal-body" >
                                <div class="form-group">
                                  <label>Card</label>
                                  <input type="text" class="form-control" id="card" name="card" required="">
                                </div>
                              </div>
                              <div class="modal-footer">
                               <button name="savecard" id="savecard" class="btn btn-success btn-raised">Save</button>
                               </form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>                            
                          </div>
                        </div>
                        <!-- Modal -->

                         <!-- Modal -->
                        <div class="modal fade" id="giftcards" role="dialog" >
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content" >
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color: black;">Add New Challenge/Gift Card</h4>
                              </div>
                              <form name="saveGC" method="post" action="functions/cards_functions.php">
                              <div class="modal-body" >
                                <div class="form-group">
                                  <label>Challenge/Gift Card</label>
                                  <input type="text" class="form-control" id="gc" name="gc">
                                </div>
                              </div>
                              <div class="modal-footer">
                               <button type="button" class="btn btn-default" name="saveGC">Save</button>
                               </form>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>                            
                          </div>
                        </div>
                        <!-- Modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="view" role="dialog" >
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content" >
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color: black;">Add New Challenge/Gift Card</h4>
                              </div>
                              <div class="modal-body" >
                                <div class="form-group">
                                   <a href="" class="btn btn-default" >Action Cards</a>
                                   <a href="" class="btn btn-default" >Challenge/Gift Cards</a>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>                            
                          </div>
                        </div>
                        <!-- Modal -->


                   </div>
                 </div>
              </section>
              </div>
        </div>

        <!-- Magic mouse -->
        <div class="mouse hidden-xs">
            <div class="wheel"></div>
        </div>
		
    </section>

   

    

   

    <!-- jQuery -->
	<script type="text/javascript" src="layout/plugins/jquery/jquery.js"></script>
    
	<!-- Bootstrap -->
    <script type="text/javascript" src="layout/plugins/bootstrap/js/bootstrap.min.js"></script>
    
	<!-- Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwJNMKhBNcsOZfs7FnUet01d0PKaKffj0&amp;sensor=false"></script>
    
	<!-- Plugins -->
    <script type="text/javascript" src="layout/plugins/retina/retina.min.js"></script>
    <script type="text/javascript" src="layout/plugins/scrollto/jquery.scrollto.min.js"></script>
    <script type="text/javascript" src="layout/plugins/smoothscroll/smoothscroll.min.js"></script>
    <script type="text/javascript" src="layout/plugins/mb/jquery.mb.ytplayer.min.js"></script>
    <script type="text/javascript" src="layout/plugins/parallax/jquery.parallax.min.js"></script>
    <script type="text/javascript" src="layout/plugins/isotope/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="layout/plugins/nav/jquery.nav.min.js"></script>
    <script type="text/javascript" src="layout/plugins/knob/jquery.knob.min.js"></script>
    <script type="text/javascript" src="layout/plugins/twitter/jquery.tweet.min.js"></script>
    
	<!-- Main -->
    <script type="text/javascript" src="layout/js/main.js"></script>
	
	<!-- Settings (Remove it on your site) -->
	<script type="text/javascript" src="layout/plugins/settings/jquery.cookies.min.js"></script>
	<script type="text/javascript" src="layout/plugins/settings/settings.js"></script>
	
  <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

<!-- Mirrored from www.athenadesignstudio.com/themes/royal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2017 11:09:14 GMT -->
</html>