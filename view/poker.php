<main>
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-poker class="ng-star-inserted">
         <div class="poker-bg">
            <div class="container casino-cntr">
               <slider>
                  <div class="carousel-container">
                     <!---->
                  </div>
               </slider>
               <div class="row">
                  <app-static-inner-content contentcode="poker">
                     <!---->
                  </app-static-inner-content>
               </div>
               <div class="row">
                  <div class="col s12 right-content">
                     <div class="flex-container clear">
                        <h4 class="rtitle flex-item"> Poker </h4>
                     </div>
                     <div class="gm-cntr">
                        <div class="row">
                           <div class="col s12">
                              <!---->
                           </div>
                        </div>
                        <div class="row">
                           <div class="col s3 csn-crd-col">
                              <a href="javascript:;" class="csn-crd" title="Texas Hold'em">
                                 <div class="crd-img"><img alt="" class="gm-img" src="//v3.pronetstatic.com/common/assets/images/poker/texas-holdem.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif"></div>
                                 <div class="crd-nm"> Texas Hold'em </div>
                              </a>
                           </div>
                           <div class="col s3 csn-crd-col">
                              <a href="javascript:;" class="csn-crd" title="Omaha Hold'em">
                                 <div class="crd-img"><img alt="" class="gm-img" src="//v3.pronetstatic.com/common/assets/images/poker/omaha.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif"></div>
                                 <div class="crd-nm"> Omaha Hold'em </div>
                              </a>
                           </div>
                           <div class="col s3 csn-crd-col">
                              <a href="javascript:;" class="csn-crd" title="Türk Pokeri">
                                 <div class="crd-img"><img alt="" class="gm-img" src="//v3.pronetstatic.com/common/assets/images/poker/turkishpoker.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif"></div>
                                 <div class="crd-nm"> Türk Pokeri </div>
                              </a>
                           </div>
                           <div class="col s3 csn-crd-col">
                              <a href="javascript:;" class="csn-crd" title="Klas Tavla">
                                 <div class="crd-img"><img alt="" class="gm-img" src="//v3.pronetstatic.com/common/assets/images/poker/tavla.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif"></div>
                                 <div class="crd-nm"> Klas Tavla </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col s6"><a target="_blank" class="btn dwnld-lnk" href="https://klasdlv2.draftplaza.com/getSkinDL.php?skinId=234"><i class="fa fa-windows fa-fw"></i> Windows için İndirin </a></div>
                        <div class="col s6"><a target="_blank" class="btn dwnld-lnk" href="http://qtupdate.klasnetwork.com/mac/installers/234/2d/PeraBet.pkgxxx"><i class="fa fa-apple fa-fw"></i> Mac için İndirin </a></div>
                     </div>
                     <div class="row">
                        <div class="col s12">
                           <div class="card-panel message-box info"> Klas Pokeri bilgisayarınızda oynayabilmek için öncelikli olarak bilgisayarınıza indirip kurmanız gereklidir. </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <app-static-inner-content contentcode="poker-bottom">
                     <!---->
                  </app-static-inner-content>
               </div>
            </div>
         </div>
         <div id="create-user-modal" materialize="modal" class="modal valign-center" style="z-index: 1065;">
            <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a>
            <div class="txt">Poker oyununu oynamadan önce bir kullanıcı adı oluşturmalısınız</div>
            <!---->
            <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
               <div class="input-field">
                  <input name="userName" ngmodel="" required="" type="text" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Kullanıcı Adı"><!---->
               </div>
               <button class="btn btn-submit">Gönder</button>
            </form>
            <!---->
         </div>
      </app-poker>
      <!---->
   </app-games>
   <!---->
</main>