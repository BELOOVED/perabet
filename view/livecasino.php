<main>
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-live-casino class="ng-star-inserted">
         <div materialize="modal" class="modal" style="z-index: 1049;">
            <tckn-verification type="openGame">
               <div class="dshbrd-mdl">
                  <div class="mdl-hdr">
                     <div class="inf-hdr"><span class="inf-title">Oturum Güvenliği Kimlik Numarası Kontrolü</span></div>
                  </div>
                  <div class="mdl-cntnt">
                     <div class="tckn-vrfctn">
                        <p>Güvenlik gereği bu işlemi gerçekleştirebilmek için TC Kimlik Numaranızın son 4 hanesini girmeniz gerekmektedir.</p>
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                           <input type="password" id="tckn" required="" name="tckn" pattern="^[0-9]+$" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="TC Kimlik No Son 4 Hanesini giriniz" minlength="4" maxlength="4"><!----><!---->
                           <div class="input-field">
                              <!----><button class="btn ng-star-inserted" disabled="">Gönder</button><!---->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </tckn-verification>
         </div>
         <div class="live-casino-bg">
            <slider>
               <div class="carousel-container">
                  <!---->
               </div>
            </slider>
            <!----><!---->
            <app-static-inner-content contentcode="liveCasino">
               <div extroutelink="" id="liveCasino" class="ng-star-inserted">
                  <gallery-slider gallery="32" height="" interval="5000" loop="" autoplay="" fade="" arrow="small" show="hover" vce-ready="">
                     <div id="panel_gallery32" class="panel_gallery bmm bm panel_fade no_arrows">
                        <div>
                           <div class="splide splide--fade splide--ltr splide--draggable is-active" id="splide04" style="visibility: visible;">
                              <div class="splide__arrows">
                                 <button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide04-track" disabled="" aria-label="Previous slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                                 <button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide04-track" disabled="" aria-label="Next slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                              </div>
                              <div class="splide__track" id="splide04-track">
                                 <!---->
                                 <ul class="splide__list" id="splide04-list"></ul>
                              </div>
                              <div></div>
                              <ul class="splide__pagination"></ul>
                           </div>
                           <div class="panel_gallery_module">
                              <!---->
                           </div>
                        </div>
                     </div>
                  </gallery-slider>
               </div>
               <div class="ng-star-inserted"></div>
               <div class="ng-star-inserted"></div>
               <!----><!---->
            </app-static-inner-content>
            <!---->
            <div id="p-csn" class="container casino-cntr ng-star-inserted">
               <!---->
               <div class="row">
                  <div class="col s2 left-content ng-star-inserted">
                     <app-static-inner-content contentcode="liveCasino-left-top">
                        <!---->
                     </app-static-inner-content>
                     <h4 class="ltitle truncate" title="923/20 Oyun"><span class="count">923/20</span>Oyun </h4>
                     <div>
                        <div class="input-field search-cntr"><i class="material-icons pg-icons prefix">search</i><input type="text" class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Oyun Ara"></div>
                        <div class="collection ng-star-inserted">
                           <app-category-container>
                              <a href="javascript:;" class="collection-item flex-container active ng-star-inserted" title="Hepsi"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Hepsi</span><span class="secondary-content count">923</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Popüler"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Popüler</span><span class="secondary-content count">33</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Yeni"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Yeni</span><span class="secondary-content count">11</span></a><!----><!----><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Pro Club Blackjack"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Pro Club Blackjack</span><span class="secondary-content count">5</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Drops&amp;Wins"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Drops&amp;Wins</span><span class="secondary-content count">1</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Pragmatic Blackjack League"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Pragmatic Blackjack League</span><span class="secondary-content count">134</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Rulet"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Rulet</span><span class="secondary-content count">115</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Poker"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Poker</span><span class="secondary-content count">14</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Loto"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Loto</span><span class="secondary-content count">32</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Masa Oyunları"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Masa Oyunları</span><span class="secondary-content count">4</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Diğer Oyunlar"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Diğer Oyunlar</span><span class="secondary-content count">34</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Blackjack"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Blackjack</span><span class="secondary-content count">527</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Bakarat"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Bakarat</span><span class="secondary-content count">158</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Crazy Evolution"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Crazy Evolution</span><span class="secondary-content count">4</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Direkt Lobi"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Direkt Lobi</span><span class="secondary-content count">13</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="FREESPIN SATIN ALMALI OYUNLAR"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">FREESPIN SATIN ALMALI OYUNLAR</span><span class="secondary-content count">1</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Live Show"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Live Show</span><span class="secondary-content count">22</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Texas Hold'em"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Texas Hold'em</span><span class="secondary-content count">3</span></a><!----><!----><!----><!----><!----><!---->
                           </app-category-container>
                        </div>
                        <!----><!---->
                     </div>
                     <app-static-inner-content contentcode="liveCasino-left-bottom">
                        <!---->
                     </app-static-inner-content>
                  </div>
                  <!---->
                  <div id="casino-right" class="col s10 right-content">
                     <!----><!---->
                     <div class="flex-container clear csn-rtitle-wrap">
                        <h4 class="rtitle flex-item ng-star-inserted"> Hepsi </h4>
                        <!----><!---->
                        <div class="casino-filters">
                           <!----><!---->
                           <select class="browser-default method left ng-untouched ng-pristine ng-valid">
                              <option selected="selected" value="1">Sayfa İçi</option>
                              <option value="2">Yeni Pencere</option>
                           </select>
                        </div>
                     </div>
                     <div class="gm-wrap">
                        <div class="flex-container clear vendor-t-c crsr-pntr ng-star-inserted">
                           <div class="vendor-title flex-item"> Oyun Sağlayıcı </div>
                           <a href="javascript:;" class="vendors-toggle-btn btn"><i class="fa fa-plus-circle pg-icons"></i><i class="fa fa-minus-circle pg-icons hide"></i></a>
                        </div>
                        <!---->
                        <app-horizontal-scroll pathcode="livecasino" class="ng-star-inserted">
                           <!----><!----><!----><!---->
                        </app-horizontal-scroll>
                        <!----><!---->
                        <div class="gm-cntr">
                           <div class="row">
                              <!----><!---->
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Perabet VIP Roulette" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/20864.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="livegames" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/livegames.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Perabet VIP Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Vegas Roulette x500" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/20282.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="egt" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/egt.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Vegas Roulette x500</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Live Speed Roulette" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/17849.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="egt" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/egt.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Live Speed Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Perabet Live Roulette" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/19867.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="livegames" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/livegames.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Perabet Live Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Dynamic Roulette 120x" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/16929.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="egt" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/egt.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <div class="rpt-rw ng-star-inserted"><span class="lmt-txt"><span class="currency-symbol">₺</span>1 - <span class="currency-symbol">₺</span>30,000 </span><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Dynamic Roulette 120x</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Live European Roulette" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/16930.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="egt" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/egt.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Live European Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Lightning Storm" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28402.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">Erken Erişim</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Lightning Storm</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Pro Club Blackjack 1" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28296.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">PG'e Özel</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Pro Club Blackjack 1</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Pro Club Speed Blackjack" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28299.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">PG'e Özel</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <div class="rpt-rw ng-star-inserted"><span class="lmt-txt"><span class="currency-symbol">₺</span>200 - <span class="currency-symbol">₺</span>200,000 </span><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Pro Club Speed Blackjack</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Pro Club VIP Blackjack" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28298.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">PG'e Özel</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Pro Club VIP Blackjack</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Pro Club Blackjack 2" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28297.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">PG'e Özel</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Pro Club Blackjack 2</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Pro Club Free Bet Blackjack" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/28295.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">PG'e Özel</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Pro Club Free Bet Blackjack</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Snakes &amp; Ladders Live" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/24242.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Snakes &amp; Ladders Live</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Privé Lounge Blackjack 3" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/24675.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <div class="rpt-rw ng-star-inserted"><span class="lmt-txt"><span class="currency-symbol">₺</span>10,000 - <span class="currency-symbol">₺</span>1,000,000 </span><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Privé Lounge Blackjack 3</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Privé Lounge Blackjack 2" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/24674.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Privé Lounge Blackjack 2</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="VIP Blackjack 7 - Emerald" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/24308.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">VIP Blackjack 7 - Emerald</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Speed Blackjack 14 - Azure" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/22066.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Speed Blackjack 14 - Azure</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Privé Lounge Blackjack 1" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/24673.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Privé Lounge Blackjack 1</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="VIP Blackjack 11 - Ruby" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/23430.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">3mEUR Turnuvası</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <div class="rpt-rw ng-star-inserted"><span class="lmt-txt"><span class="currency-symbol">₺</span>2,000 - <span class="currency-symbol">₺</span>100,000 </span><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!----><!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">VIP Blackjack 11 - Ruby</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Baccarat D01" src="//v3.pronetstatic.com/common/assets/images/livecasino/300x200/26474.jpg"><img alt="" class="gm-img loading" src="//v3.pronetstatic.com/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="sa_gaming" src="//v3.pronetstatic.com/common/assets/images/livecasino/32x32/sa_gaming.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted">
                                                <message-box type="info" content="MESSAGES.NO_VENDOR_LIMIT">
                                                   <div class="card-panel message-box info">
                                                      <!----><!---->
                                                      <div class="ng-star-inserted">
                                                         Para biriminize uygun masa bulunamadı.<!----><!----><!----><!---->
                                                      </div>
                                                      <!----><!----><!----><!----><!---->
                                                   </div>
                                                </message-box>
                                             </div>
                                             <!----><!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Baccarat D01</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                           </div>
                           <div class="row ng-star-inserted">
                              <!---->
                              <div class="col s6 s12 ng-star-inserted"><button id="show-more-btn" class="btn sw-mr btn-show-more"> Daha Fazla Oyun Göster </button></div>
                              <!---->
                           </div>
                           <!----><!---->
                        </div>
                     </div>
                  </div>
               </div>
               <app-static-inner-content contentcode="liveCasino-bottom">
                  <!---->
               </app-static-inner-content>
            </div>
            <!----><!---->
         </div>
         <!---->
      </app-live-casino>
      <!---->
   </app-games>
   <!---->
</main>