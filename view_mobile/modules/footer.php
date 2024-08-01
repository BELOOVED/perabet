
<div id="btslpSld" style="top: 100%; padding-bottom: 0px;">
               <app-bet-slip>
                  <div id="btslp-hdr" class="bet-slip-header flex-container">
                     <div class="bet-slip">
                        <ul class="tabs tabs-fixed-width bet-slip-tabs fast-tab" style="background-color: transparent;">
                           <li class="tab">
                              <a href="javascript:;" class="bet-count active">
                                 Kupon <!---->
                              </a>
                           </li>
                           <!---->
                        </ul>
                     </div>
                     <a href="javascript:;" class="coupon-close-btn betslipbtn btn"><i class="material-icons">close</i></a>
                  </div>
                  <!---->
                  <div id="bet-slip-master" class="bet-slip-master history">
                     <div class="bookabet-main">
                        <app-bookabet-search>
                           <div class="bet-slip">
                              <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                 <input required="" type="text" name="bookingRef" maxlength="6" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Rezervasyon kodunu giriniz">
                                 <div class="betslip-btn-group flex-container"><button type="submit" class="btn betslipbtn flex-item" disabled="">Arama</button></div>
                              </form>
                           </div>
                        </app-bookabet-search>
                        <!---->
                     </div>
                     <!----><!---->
                     <div class="card-panel message-box center-align info empty_coupon_message"> Bahis yapabilmek için en az bir seçim yapılmalıdır </div>
                     <!----><!----><!----><!----><!----><!---->
                  </div>
                  <!----><!----><!----><!----><!----><!----><!----><!---->
               </app-bet-slip>
            </div>
            <div materialize="modal" class="modal" id="undefined" style="z-index: 1027;">
               <!----><!----><!---->
               <div class="modal-content">
                  <!---->
               </div>
            </div>
            <div id="cookies-top-modal" materialize="modal" class="modal bottom-sheet" style="z-index: 1029;">
               <br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again secondary-color right cookies-btn">Anladım</a>
               </div>
            </div>
            <div id="cookies-bottom-modal" materialize="modal" class="modal bottom-sheet" style="z-index: 1031;">
               <br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again secondary-color right cookies-btn">Anladım </a>
               </div>
            </div>
            <div id="mdl-on-enter" materialize="modal" class="modal" style="z-index: 1033;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again">Bir Daha Gösterme</a>
               </div>
            </div>
            <div id="home-page-modal" materialize="modal" class="modal" style="z-index: 1035;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again">Bir Daha Gösterme</a>
               </div>
            </div>
            <div materialize="modal" id="cNumpad" class="modal bottom-sheet number-keyboard" style="z-index: 1037;">
               <app-custom-numpad>
                  <div class="key-info">
                     <!----> Yetersiz bakiye <!----><!---->
                     <div class="flex-container first-row">
                        <div class="text flex-item"> Olası Kazanç: </div>
                        <div class="amount"><span>0.00<span class="currency-symbol"> ₺</span></span></div>
                     </div>
                     <!----><!---->
                     <div class="flex-container sec-row">
                        <div id="amountArea" libcnumpadamount="" class="amount flex-item">
                           <div id="eas" class="text left numpad-amount"> Miktar gir </div>
                           <span id="number" class="right">0</span><span id="css" class="right currency-symbol">₺</span><!---->
                        </div>
                     </div>
                     <!----><!---->
                  </div>
                  <div class="flex-container fast-btns">
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 1 
                     </button>
                     <!---->
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 5 
                     </button>
                     <!---->
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 10 
                     </button>
                     <!---->
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 25 
                     </button>
                     <!---->
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 50 
                     </button>
                     <!---->
                     <button class="flex-item btn">
                        <span class="currency-symbol">₺</span><!----> 100 
                     </button>
                     <!----><!---->
                  </div>
                  <!----><!---->
                  <div class="numbers-cont">
                     <button class="item">1</button><!----><button class="item">2</button><!----><button class="item">3</button><!----><button class="item">4</button><!----><button class="item">5</button><!----><button class="item">6</button><!----><button class="item">7</button><!----><button class="item">8</button><!----><button class="item">9</button><!----><button class="item zero">0</button><!----><!----><button class="item">,</button><button class="item backspace"><i class="fa fa-backward"></i></button><button class="item enter">Tamam</button>
                  </div>
                  <!----><!---->
               </app-custom-numpad>
            </div>
            <!---->
         </app-out-component>
         <!----><!----><!----><!---->
      </app-root>
      <script src="runtime-es2015.5f2f41079be7523669d7.js" type="module"></script><script src="runtime-es5.5f2f41079be7523669d7.js" nomodule="" defer=""></script><script src="polyfills-es5.53f464a96e8329e70464.js" nomodule="" defer=""></script><script src="polyfills-es2015.f0f7e87b949e5539bda0.js" type="module"></script><script src="scripts.dc79d1d1daadc8b5a269.js" defer=""></script><script src="main-es2015.62babf7d33c37e62b6df.js" type="module"></script><script src="main-es5.62babf7d33c37e62b6df.js" nomodule="" defer=""></script>
      <div class="hiddendiv common"></div>
      <div class="drag-target" data-sidenav="user-menu" style="right: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
      <div class="drag-target" data-sidenav="left-menu" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
      <bet-master merchant="pn10" language="tr" vce-ready="">
         <div id="PanelFront">
            <!---->
            <script>
        $(document).ready(function() {
            // Cookie ayarlama fonksiyonu
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Cookie okuma fonksiyonu
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            // Modalı gösterme fonksiyonu
            function showModal() {
                $(".bm_popup_cover .popup_container").fadeIn();
                $(".bm_popup_mask").fadeIn();
            }

            // Modalı kapatma fonksiyonu
            function closeModal() {
                $(".bm_popup_cover .popup_container").fadeOut();
                $(".bm_popup_mask").fadeOut();
            }

            // "Bir daha gösterme" butonuna tıklanınca cookie oluştur
            $(".never_show").click(function() {
                setCookie("modal_shown", "true", 30); // Cookie 30 gün süresince geçerli olacak
                closeModal();
            });

            // X butonuna tıklanınca modalı kapat
            $(".close_btn").click(function() {
                setCookie("modal_shown", "true", 30); // Cookie 30 gün süresince geçerli olacak
                closeModal();
            });

            // Cookie kontrolü ve modal gösterme
            if (!getCookie("modal_shown")) {
                showModal();
            }
        });
    </script>
            <div class="bm_popup_cover">
               <div class="popup_cover">
                  <div class="popup_container bm_popup" style="display: none;">
                     <div class="panel_popup">
                        <div class="never_show">Bir daha Gösterme</div>
                        <div class="close_btn"><i class="el-dialog__close el-icon el-icon-close"></i></div>
                        <div><a style="cursor: pointer;"><img src="https://cdn.panelfront.net/merchants/pn10/uploads/668d980093e4981d57e0f0c0ca1a59f7c98fcabdb9291.jpeg"></a></div>
                        <!---->
                        <div class="content" style="display: none;"></div>
                     </div>
                  </div>
               </div>
               <!---->
               <div class="bm_popup_mask" style="display: none;"></div>
            </div>
            <!----><!---->
            <div class="bmm bm betmaster_helper">
               <div class="helper_button">
                  <div class="helper_btn_content">
                     <div class="help_text hidden-xs-only"> Yardım </div>
                     <div class="help_text hidden-sm-and-up"><i class="fas fa-info"></i></div>
                  </div>
               </div>
               <div class="sidemenu">
                  <div class="header">
                     <div class="title">Yardım</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="content">
                     <!----><a id="menu_btn1" class="helper_content_btn menu_btn"><i class="pf-icon pfi-tvplay"></i> Canlı Maç İzle </a><a id="menu_btn2" class="helper_content_btn menu_btn"><i class="fas fa-user-tie"></i> Ortaklık </a><a id="menu_btn3" class="helper_content_btn menu_btn"><i class="pf-icon pfi-transfer"></i> Nasıl Yatırım Yapılır? </a><a id="menu_btn4" class="helper_content_btn menu_btn"><i class="far fa-thumbs-up"></i> Güncel Adres </a>
                     <div class="helper_content_btn live_chat_side_btn"><i class="far fa-comment-alt"></i> Canlı Destek </div>
                     <!----><a class="helper_content_btn shop_btn"><i class="far fa-shopping-cart"></i> Pera Shop </a><a class="helper_content_btn tournament_btn"><i class="fas fa-medal"></i> Turnuvalar </a><!---->
                     <div role="tablist" aria-multiselectable="true" class="el-collapse">
                        <!---->
                        <div class="el-collapse-item write_us_info">
                           <div role="tab" aria-controls="el-collapse-content-3653" aria-describedby="el-collapse-content-3653">
                              <div role="button" id="el-collapse-head-3653" tabindex="0" class="el-collapse-item__header"><i class="far fa-envelope"></i> Bize Yazın <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-3653" id="el-collapse-content-3653" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <div>Dilediğiniz zaman bize <span class="highlight">destek@perabet.com</span> adresinden ulaşabilirsiniz.</div>
                              </div>
                           </div>
                        </div>
                        <div class="el-collapse-item call_collapse">
                           <div role="tab" aria-controls="el-collapse-content-5803" aria-describedby="el-collapse-content-5803">
                              <div role="button" id="el-collapse-head-5803" tabindex="0" class="el-collapse-item__header"><i class="el-icon-phone-outline"></i> Sizi Arayalım <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-5803" id="el-collapse-content-5803" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <call-service theme="dark" vce-ready="">
                                    <div class="bmm call_me_form dark">
                                       <!---->
                                       <div class="el-select call_me_inputs el-select--small">
                                          <!---->
                                          <div class="el-input el-input--small el-input--prefix el-input--suffix">
                                             <!----><input type="text" readonly="readonly" autocomplete="off" placeholder="Aranmak İstediğiniz Zaman" class="el-input__inner">
                                             <span class="el-input__prefix">
                                                <i class="el-input__icon el-icon-watch"></i><!---->
                                             </span>
                                             <span class="el-input__suffix">
                                                <span class="el-input__suffix-inner">
                                                   <i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!---->
                                                </span>
                                                <!---->
                                             </span>
                                             <!----><!---->
                                          </div>
                                          <div class="el-select-dropdown el-popper" style="display: none;">
                                             <div class="el-scrollbar" style="">
                                                <div class="el-select-dropdown__wrap el-scrollbar__wrap el-scrollbar__wrap--hidden-default">
                                                   <ul class="el-scrollbar__view el-select-dropdown__list">
                                                      <!---->
                                                      <li class="el-select-dropdown__item"><span>00:00 - 01:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>01:00 - 02:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>02:00 - 03:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>03:00 - 04:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>04:00 - 05:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>05:00 - 06:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>06:00 - 07:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>07:00 - 08:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>08:00 - 09:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>09:00 - 10:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>11:00 - 12:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>12:00 - 13:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>13:00 - 14:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>14:00 - 15:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>15:00 - 16:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>16:00 - 17:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>17:00 - 18:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>18:00 - 19:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>19:00 - 20:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>20:00 - 21:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>21:00 - 22:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>22:00 - 23:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>23:00 - 00:00</span></li>
                                                   </ul>
                                                </div>
                                                <div class="el-scrollbar__bar is-horizontal">
                                                   <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                </div>
                                                <div class="el-scrollbar__bar is-vertical">
                                                   <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <button disabled="disabled" type="button" class="el-button call_me_btn el-button--default el-button--small is-disabled">
                                          <!----><!----><span>Gönder</span>
                                       </button>
                                    </div>
                                 </call-service>
                              </div>
                           </div>
                        </div>
                        <!---->
                        <div class="el-collapse-item app_collapse">
                           <div role="tab" aria-controls="el-collapse-content-8095" aria-describedby="el-collapse-content-8095">
                              <div role="button" id="el-collapse-head-8095" tabindex="0" class="el-collapse-item__header"><i class="fas fa-th-large"></i> Kolay Erişim <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-8095" id="el-collapse-content-8095" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <div class="app_info"> Adres değişikliklerinden etkilenmemek için kolay erişim uygulamalarımızı indirebilirsiniz. </div>
                                 <a href="https://peramobile.us/" target="_blank" class="app_btns"><i class="fab fa-apple"></i> IOS Uygulaması</a>
                                 <a href="https://peramobile.us/" target="_blank" class="app_btns">
                                    <div class="app_btn_inner"><i class="fab fa-android"></i> Android Uygulaması</div>
                                    <!---->
                                 </a>
                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="helper_content_btn faq_btn"><i class="fas fa-info-circle"></i> Genel Sorular </a>
                     <social-media theme="dark" vce-ready="">
                        <div id="bm_socialmedia" class="bmm social_media_btns dark big_social">
                           <!---->
                           <a href="https://twitter.com/perabetsosyal" target="_blank" class="media_btn twitter">
                              <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="24px" height="24px" viewBox="0 0 24 24" xml:space="preserve">
                                 <path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z"></path>
                              </svg>
                           </a>
                           <!----><a href="https://www.youtube.com/channel/UCAkDVOBMR-ejdwna1anrmPg" target="_blank" class="media_btn youtube"><i class="fab fa-youtube"></i></a><!----><!----><a href="https://t.me/perabetofficial" target="_blank" class="media_btn telegram"><i class="fab fa-telegram"></i></a><!---->
                        </div>
                     </social-media>
                  </div>
               </div>
            </div>
            <div class="bmm panel_drawer scorematic_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">Scorematik</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <div class="drawer_loader"><i class="fas fa-circle-notch fa-spin"></i></div>
               </div>
            </div>
            <div class="bmm panel_drawer pointtable_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">Puan Tablosu</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <div class="drawer_loader"><i class="fas fa-circle-notch fa-spin"></i></div>
               </div>
            </div>
            <div class="bmm panel_drawer populargames_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title"></div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content">
                     <div class="bmm popular_games">
                        <div class="popular_games_cover"></div>
                     </div>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="bmm panel_drawer top_winners_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">En Çok Kazananlar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content">
                     <top-winners type="casino" mobile="true" drawer="true" vce-ready="">
                        <div class="bmm top_winners_contanier tabbed_winners" style="max-width: 100%;">
                           <div class="topn_winners_title" style="display: none;">
                              <span class="mark-fapk pf-icon pfi-cherry"></span><!----> En Çok Kazananlar 
                           </div>
                           <div class="top_winners_tabs"><button class="is_active">Günlük</button><button class="">Haftalık</button><button class="">Aylık</button></div>
                           <div id="top_winners" class="top_winners_cover">
                              <section class="top_winners_section is_active">
                                 <div class="top_winners_title"> Günlük </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27866.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>gan****</span><strong class="game_name">Sweet Bonanza 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺587,050</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Gkh****</span><strong class="game_name">Sweet Bonanza</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺461,250</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/21510.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ali****</span><strong class="game_name">Perabet Bonanza</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺457,047</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27866.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Ayd****</span><strong class="game_name">Sweet Bonanza 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺427,315</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27289.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Dre****</span><strong class="game_name">Sugar Rush 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺387,677</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27289.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Dre****</span><strong class="game_name">Sugar Rush 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺346,168</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25414.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ara****</span><strong class="game_name">Starlight Princess 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺298,000</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                              <section class="top_winners_section">
                                 <div class="top_winners_title"> Haftalık </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>agk******</span><strong class="game_name">Gates of Olympus 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺8,314,020</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Bba****</span><strong class="game_name">Crazy Time</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺2,209,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/17448.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Pun****</span><strong class="game_name">Sweet Bonanza CandyLand</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,998,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>agk******</span><strong class="game_name">Gates of Olympus 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,811,670</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27866.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Rev****</span><strong class="game_name">Sweet Bonanza 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,403,610</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27866.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>MUA****</span><strong class="game_name">Sweet Bonanza 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,155,975</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>agk******</span><strong class="game_name">Gates of Olympus 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺746,240</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                              <section class="top_winners_section">
                                 <div class="top_winners_title"> Aylık </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>agk******</span><strong class="game_name">Gates of Olympus 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺8,314,020</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/17448.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Rev****</span><strong class="game_name">Sweet Bonanza CandyLand</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺6,230,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27866.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>avu****</span><strong class="game_name">Sweet Bonanza 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺3,229,280</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/27289.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>eyp****</span><strong class="game_name">Sugar Rush 1000</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺2,241,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Bba****</span><strong class="game_name">Crazy Time</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺2,209,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/17448.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Pun****</span><strong class="game_name">Sweet Bonanza CandyLand</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,998,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>agk******</span><strong class="game_name">Gates of Olympus 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,811,670</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                           </div>
                        </div>
                     </top-winners>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="bmm panel_drawer custom_menu_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">En Çok Kazananlar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <!---->
               </div>
            </div>
            <div class="bmm bm betmaster_tournament_table">
               <div class="tournament_button"><i class="fas fa-medal"></i></div>
               <div class="sidemenu">
                  <div class="header">
                     <div class="title">Turnuvalar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="el-dialog__wrapper bt_modal" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog is-fullscreen">
                  <div class="el-dialog__header"><span class="el-dialog__title"></span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                  <!----><!---->
               </div>
            </div>
            <!---->
            <div class="bmm betmaster_post_page" style="display: none;">
               <div class="el-icon-close post_close_btn"></div>
               <!----><!---->
            </div>
            <div class="bmm bm">
               <!---->
            </div>
            <!----><!---->
            <div class="el-dialog__wrapper participate_modal" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="Katıl" class="el-dialog" style="margin-top: 15vh;">
                  <div class="el-dialog__header"><span class="el-dialog__title">Katıl</span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                  <!----><!---->
               </div>
            </div>
         </div>
      </bet-master>
      
<?=html_entity_decode($main['sources'], ENT_QUOTES, 'UTF-8')?>
<script>
<?php if(isset($us['id'])){?>
function loginorp1ay(){
   Swal.fire({
    title: 'Hata!',
    icon: 'error',
    html: 'Yetersiz Bakiye! Hesabınıza Yükleme Yapınız. <br> <button class="swal2-confirm swal2-styled"><a href="deposit">Para Yatır</a></button>',
    showConfirmButton: false
});
}
<?php }else{?>
   function loginorp1ay(){
      openmodal('loginModal');
   }
   <?php }?>
   function maximizeTawkToWidget() {
   Tawk_API.maximize();
   window.Tawk_API.hideWidget();
   swal.close();
    
 }
 
 document.getElementById('maximizeButton').addEventListener('click', maximizeTawkToWidget);
</script>
   </body>
</html>