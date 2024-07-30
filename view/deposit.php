<?php
$query = $db -> query("SELECT * from banks WHERE name= 'ziraatbank'");
$query2 = $db -> query("SELECT * from cryptoacc");

$query1 = $db -> query("SELECT * from accounts WHERE id='1'")->fetch_assoc();


?>
<main>
   <router-outlet></router-outlet>
   <app-dashboard>
      <div class="container dshbrd-cntr">
         <div class="row">
            <div class="col s3 lft-cntnt">
               <div class="u-info">
                  <h5 class="u-name">
                     Pisikooo3434<!---->
                  </h5>
                  <h5 class="u-number">Kullanıcı Numarası : 2024079180225</h5>
               </div>
               <div class="dshbrd-sdbr">
                  <ul materialize="collapsible" data-collapsible="expandable" class="collapsible">
                     <li class="active">
                        <div class="collapsible-header active">Hesabım</div>
                        <div class="collapsible-body" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/deposit-money" class="active"><i class="fa fa-money"></i> Para Yatırma</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/withdraw-money"><i class="fa fa-money"></i> Para Çekme</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/transfer"><i class="fa fa-exchange"></i> Transfer</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/promotions"><i class="fa fa-gift"></i> Promosyonlar</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <!----><a routerlinkactive="active" href="//perabet1038.com/contents/promotions"><i class="fa fa-calendar-plus-o"></i> Şikayet ve Öneriler</a><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active">
                        <div class="collapsible-header active">İşlemler</div>
                        <div class="collapsible-body" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/bet-history"><i class="fa fa-history"></i> Bahis Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/jackpot-history"><i class="fa fa-history"></i> Jackpot Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/financial-transactions"><i class="fa fa-pie-chart"></i> Finans Geçmişim</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/bonus-activities"><i class="fa fa-gift"></i> Bonus Hareketlerim</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/casino-pro-history"><i class="fa fa-history"></i> Casinopro Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/free-spin"><i class="fa fa-history"></i> Freespin Detayları</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/golden-race"><i class="fa fa-history"></i> Golden Race</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/betmakers"><i class="fa fa-history"></i> Betmakers</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/ultraplay"><i class="fa fa-history"></i> E-Sporlar Hesap Hrk. Raporu</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/binary"><i class="fa fa-history"></i> Binary</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/betx"><i class="fa fa-history"></i> Betx</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active">
                        <div class="collapsible-header active">Kullanıcı Hareketleri</div>
                        <div class="collapsible-body" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/personal-and-account-detail"><i class="fa fa-user"></i> Kişisel ve Hesap Bilgilerim</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-details"><i class="fa fa-user-plus"></i> Kişisel Bilgiler</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/account-details"><i class="fa fa-user-plus"></i> Hesap Bilgileri</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/change-password"><i class="fa fa-unlock-alt"></i> Şifremi Değiştir</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/limit-settings"><i class="fa fa-clock-o"></i> Bahis Limitlendirme</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-settings"><i class="fa fa-user-plus"></i> Ayarlar</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/documents"><i class="fa fa-id-card-o"></i> Dokümanlar</a><!----><!---->
                              </li>
                              <li class="collection-item">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-security"><i class="fa fa-check-square-o"></i> İki adımlı doğrulama</a><!----><!---->
                              </li>
                              <li class="collection-item" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/friend-referral"><i class="fa fa-users"></i> Arkadaş referansı</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <!---->
                  </ul>
               </div>
            </div>
            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-deposit-money>
                  <deposit-withdraw-money>
                     <div class="pymnt-cntnt">
                        <div class="dshbrd-mdl dshbrd-hide-block">
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Para Yatırma</span><!----><!---->
                              </div>
                           </div>
                           <div class="mdl-cntnt">
                              <!---->
                              <p>Para yatırma seçenekleri aşağıda listelenmiştir. Lütfen para yatırma türünü seçip hesabınıza kolayca yatırmak için talimatları takip ediniz.</p>
                              <!---->
                              <app-static-inner-content contentcode="deposit-link-top">
                                 <!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                           </div>
                           <app-notifications>
                              <div>
                                 <!---->
                              </div>
                           </app-notifications>
                        </div>
                        <!---->
                        <div class="dshbrd-mdl">
                           <!---->
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Para Yatırma Seçenekleri</span><!----><!---->
                              </div>
                           </div>
                           <!---->
                           <div class="mdl-cntnt clear">
                              <!----><!----><!----><!---->
                              <app-static-inner-content contentcode="deposit-link">
                                 <div extroutelink="" id="deposit-link">
                                    <div class="row">
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/63e422ae2c53eb0acd3d9e18d75e93db02482a3694c63.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>HAVALE - EFT - FAST <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="havale" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/63e42286aeda3b288bc5ddebf452431cac6399f26c9b6.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>PAPARA <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="papara" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/63e422c18b87bda58ba5b0fd738294dfcc755c39b0258.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>KREDİ KARTI <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="creditcard" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/63e422e91256507c0e2f3540c9a035e469074ee11ef16.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>SANAL CÜZDAN <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="sanalcuzdan" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/63e4229d1d87f09ed37fe1149c0756d4504103241c5d5.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>QR KOD - ATM / CEPBANK <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="qrcode" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col x1 -->
                                       <div class="col s6">
                                          <div class="row s0902">
                                             <div class="col s4">
                                                <div class="s0902-image">
                                                   <img class="responsive-img" src="https://cdn.panelfront.net/merchants/pn10/uploads/65c10df2d53596bcfc983321d16e136e0e8ced8e48480.jpeg" alt="">
                                                </div>
                                             </div>
                                             <div class="col s8 s0902-block">
                                                <h3>KRİPTO PARA <span>İLE</span></h3>
                                                <span>Saniyeler içinde yatırım yap!</span>
                                                <a href="javascript:void(0)" data-open-modal="bitcoin" class="btn btn-block open-custom-modal-popup">
                                                <i class="fa fa-money"></i> PARA YATIR
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="havale" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1043;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://v3.pronetstatic.com/perabet/upload_files/modal-v1-havale-eft-fast-logo.jpg" width="100" height="33">
                                                      <h5>HAVALE - EFT - FAST</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/perabet/upload_files/dp-oto-guvenli-havale-min.jpg" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>Otomatik Güvenli Havale</h5>
                                                                             <small>Min: 100.00 ₺ / Max: 20,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a id="automaticPayment" target="_blank" href="javascript:void(0)" class="btn right deposit-btn">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1219.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>SoftPay Deposit</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="softpay-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1495.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Joy Havale Deposit </h5>
                                                                        <small>Min: ₺100.00 / Max: ₺100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="joy-havale-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-2196.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>EsPay Cash Bank Transfer Deposit</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="espaycash-banktransfer-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-1681.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>EN HIZLI HAVALE Deposit</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 500,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="enhizlihavale-bank-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1919.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Paysend Deposit</h5>
                                                                        <small>Min. TRY: 50.00 / Max. TRY: 100,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="paysend-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1988.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Garanti Havale Deposit</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="scashmoney-hizliodemeler-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1234.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>TrinkHavale Deposit</h5>
                                                                        <small>Min: 200.00 ₺ / Max: 200,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="trink-havale-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1653.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Vizapay Multi Deposit</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="vizapaymulti-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-1574.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>ScashMoney FAST Deposit</h5>
                                                                             <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="scashmoney-fast-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/favex-havale.jpg" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>FavexHavale Deposit</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="favexhavale-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-1423.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Safirhavale Deposit </h5>
                                                                        <small>Min: 200.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="safirhavale-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-412.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Envoy Hızlı Havale</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 10,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="envoysoft-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-1643.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>PaparaRS Transfer ile Yatırım</h5>
                                                                             <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="paparars-transfer-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-2099.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>PGS Deposit</h5>
                                                                        <small>Min: ₺250.00 / Max: ₺50,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="pgs-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/bank-transfer.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Banka Transferi</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 20,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="BANK_TRANSFER" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="papara" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1045;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://v3.pronetstatic.com/perabet/upload_files/modal-v1-papara.jpg" width="100" height="33">
                                                      <h5>PAPARA</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-852.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Papara Form Yatırım</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 200,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="paparaform-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-1148.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Premium Papara ile Yatırım</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 500,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="anindaislem-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://cdn.panelfront.net/merchants/pn17/uploads/650ac6d842b26ee9db1abc0e1dd81f626989f27c0c920.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Anında Papara ile Yatırım </h5>
                                                                        <small>Min: 25.00 ₺ / Max: 1,000,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:void(0);" class="btn right deposit-btn aninda_papara">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1701.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Joy Papara Deposit</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="joym100-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1991.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Garanti Papara Deposit</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="scashmoney-hizliodemeler-papara-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-1645.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>PaparaRS Papara ile Yatırım </h5>
                                                                             <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="paparars-papara-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>
                                                         <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/perabet/upload_files/per-papara-dp.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>PerPapara ile Yatırım</h5>
                                                                             <small>Min: 100.00 ₺ / Max: 50,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="cpapara-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-1148.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Enpay Papara ile Yatırım </h5>
                                                                        <small>Min: 250.00 ₺ / Max: 50,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:void(0);" class="btn right deposit-btn enpay_papara">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/favex-papara.jpg" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>FavexPapara Deposit </h5>
                                                                        <small>Min: 100.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="favexpapara-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-1739.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>Fxflexpay Deposit </h5>
                                                                             <small>Min: 100.00 ₺ / Max: 50,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="fxflexpay-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="creditcard" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1047;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://v3.pronetstatic.com/perabet/upload_files/modal-v1-kredi-karti.jpg" width="100" height="33" class="anindahesap-metefe-deposit">
                                                      <h5>KREDİ KARTI</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/cc-logo-white-bg.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Many Kredi ve Banka Kartı İle Yatırım</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 20,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="manypay-credit-card-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/aspay-kredi-karti.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Aspay Kredi Kartı</h5>
                                                                        <small>Min. TRY: 100.00 / Max. TRY: 2,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="aspay-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-1494.png?v=1" width="100" height="33">
                                                                     <img src="https://v3.pronetstatic.com/perabet/upload_files/cc-logo-white-bg.png" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>Kredi ve Banka Kartı İle Yatırım</h5>
                                                                             <small>Min: 100.00 ₺ / Max: 10,000.00 ₺</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="manypay-credit-card-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-521.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Envoy Kredi Kartı Yatırım</h5>
                                                                        <small>Min. TRY: 50.00 / Max. TRY: 2,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="envoysoft-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col s6">
                                                         <div class="card-panel bank-card">
                                                             <div class="flex-container">
                                                                 <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                                     <img src="https://v3.pronetstatic.com/perabet/upload_files/favex-kkarti.jpg" width="100" height="33">
                                                                 </span>
                                                                 <div class="flex-item">
                                                                     <div>
                                                                         <div class="bnk-inf-fld bnk-fisrts">
                                                                             <h5>Favex Kredi Kartı</h5>
                                                                             <small>Min. TRY: 50.00 / Max. TRY: 125,000.00</small>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <a href="javascript:;" data-open-depositmodal="favexkredikarti-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                             </div>
                                                         </div>
                                                         </div>-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="sanalcuzdan" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1049;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://v3.pronetstatic.com/perabet/upload_files/modal-v1-sanal-cuzdan.jpg" width="100" height="33" class="anindahesap-metefe-deposit">
                                                      <h5>SANAL CÜZDAN</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/makrobet/upload_files/deposit-2068.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Anında Parazula Deposit</h5>
                                                                        <small>Min. TRY: 50.00 / Max. TRY: 100,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="anindaparazulav2-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-777.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Payfix Yatırım</h5>
                                                                        <small>Min: 25.00 ₺ / Max: 500,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="pay-fix-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/aninda-paypay-v2.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Anında Mefete ile Yatırım</h5>
                                                                        <small>Min: 20.00 ₺ / Max: 100,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="anindamefetev2-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-853.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Popy Pay Deposit</h5>
                                                                        <small>Min. TRY: 50.00 / Max. TRY: 125,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="anindahesap-metefe-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/favex-paybol.jpg" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Paybol Deposit</h5>
                                                                        <small>Min: 20.00 ₺ / Max: 50,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="favexpaybol-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="qrcode" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1051;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://v3.pronetstatic.com/perabet/upload_files/modal-v1-qrkod-yatirim.jpg" width="100" height="33" class="anindahesap-metefe-deposit">
                                                      <h5>QR KOD - ATM / CEPBANK</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-521.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Envoy Hızlı QR Yatırım</h5>
                                                                        <small>Min. TRY: 50.00 / Max. TRY: 10,000.00</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="envoyqr-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/mobile-bank.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Atm/Cep Bank ile Transfer</h5>
                                                                        <small>Min: 50.00 ₺ / Max: 2,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="MOBILEBANK" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="bitcoin" class="modal dshbrd-modal pymnt-mdl" style="z-index: 1053;">
                                       <div class="modal-content">
                                          <div class="dshbrd-mdl pymnt-mdl">
                                             <div class="mdl-hdr">
                                                <div class="header-content">
                                                   <div class="modal-title">
                                                      <img src="https://cdn.panelfront.net/merchants/pn10/uploads/65c10e435aa58c78b1d60a11efccc375f5b071ab1bf14.jpeg" width="100" height="33" class="anindahesap-metefe-deposit">
                                                      <h5>KRİPTO PARA</h5>
                                                   </div>
                                                   <div class="modal-close-button-r3">
                                                      <a href="javascript:void(0)" style="color: white">
                                                      <i class="fa fa-times" style="color: white"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mdl-cntnt" style="padding: 0;">
                                                <div class="content">
                                                   <div class="mdl-cntnt row">
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-2179.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Payyu Crypto Deposit</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 1,000,000.00 ₺ </small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="paytu-crypto-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/perabet/upload_files/deposit-185.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Anında BTC Yatırım</h5>
                                                                        <small>Min: 100.00 ₺ / Max: 5,000,000.00 ₺ </small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="anindabtcv2-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col s6">
                                                         <div class="card-panel bank-card">
                                                            <div class="flex-container">
                                                               <span style="display: inline-block;background: #fff;padding: 15px 10px;margin: 0 15px 0 10px;">
                                                               <img src="https://v3.pronetstatic.com/common/assets/images/payments/deposit-672.png" width="100" height="33">
                                                               </span>
                                                               <div class="flex-item">
                                                                  <div>
                                                                     <div class="bnk-inf-fld bnk-fisrts">
                                                                        <h5>Youpaycoin Yatırım</h5>
                                                                        <small>Min: 310.00 ₺ / Max: 150,000.00 ₺</small>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <a href="javascript:;" data-open-depositmodal="upaycoins-deposit" class="btn right deposit-btn open-custom-modal-popup-other">PARA YATIR</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="creditcardmodal" class="modal modal-fixed-footer" style="z-index: 1055;">
                                       <div class="modal-header">
                                          <a href="javascript:;" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times"></i></a>
                                       </div>
                                       <div class="modal-content" style="min-height:600px; padding:0">
                                          <iframe id="creditCardIframe" src="https://card.perabetpay.com/pay/#!Pisikooo3434_2024079180225" width="100%" height="100%" style="min-height:600px; border: 0; margin:0;"></iframe>
                                       </div>
                                    </div>
                                 </div>
                                 <div>
                                    <script type="text/javascript">
                                       $(document).ready(function () {
                                       
                                           var user_prefx = {
                                               username: isLoggedInUser.username,
                                               code: sessionStorage.getItem("customerCode"),
                                               host: location.hostname,
                                               fullname: isLoggedInUser.firstName + ' ' + isLoggedInUser.surname
                                           }
                                       
                                           setTimeout(function () {
                                       
                                               $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin,#creditcardmodal').modal();
                                       
                                               $('#creditCardIframe').attr('src', 'https://card.perabetpay.com/pay/#!' + user_prefx.username + "_" + user_prefx.code);
                                       
                                               $('a.credicarddeposit').click(function () {
                                                   $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin').modal('close');
                                                   $('#creditcardmodal').modal('open');
                                               });
                                       
                                               $('a.aninda_papara').click(function () {
                                                   $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin').modal('close');
                                                   window.open('https://fastpay.anindapay.com/deposit/redirect/pro?id=03df2d07-490a-4d2a-b4bf-57abe6af28d4&usercode=' + user_prefx.code + '&username=' + user_prefx.username + '&back=' + user_prefx.host, '_blank');
                                               });
                                       
                                               $('a.enpay_papara').click(function () {
                                                   $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin').modal('close');
                                                   window.open('https://auth.enpaypapara2.com/create-payment?token=glndl0%2fD%2fHrCxEXVDXjRO91UaAnul1nbppL0gmPzM8qjxPGfixylCK0r2Tu5jFhnW8y2JqE1z92gwMCaOOwqVJamtMhL7l0lRVhBMUOg%2fU0%3d&username=' + user_prefx.fullname + '&userid=' + user_prefx.code, '_blank');
                                               });
                                       
                                               $('.open-custom-modal-popup').on('click touch', function () {
                                                   var modal = $(this).attr('data-open-modal');
                                                   $("#" + modal).modal('open');
                                               });
                                       
                                               $('.modal-close-button-r3 a').on('click touch', function(){
                                                   $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin,#creditcardmodal').modal('close');
                                               });
                                       
                                               $('.open-custom-modal-popup-other').on('click touch', function(){
                                                   var depositmodal = $(this).attr('data-open-depositmodal');
                                                   $('div[data-payment="'+depositmodal+'"]').trigger('click');
                                                   $('#havale,#papara,#creditcard,#sanalcuzdan,#qrcode,#bitcoin,#creditcardmodal').modal('close');
                                               });
                                       
                                               $('a#automaticPayment').attr("href", "https://www.checkpay.org/share/#/" + user_prefx.username + "/" + user_prefx.code + "/step-1/bank");
                                       
                                           }, 500);
                                       
                                       });
                                    </script>
                                 </div>
                                 <div>
                                    <style type="text/css">
                                       .s0902 {
                                       background: #232a33;
                                       padding: 10px 0;
                                       border: 1px solid #444d5d;
                                       margin-right: 0 !important;
                                       margin-top: 10px;
                                       }
                                       .s0902 .s0902-block h3 {
                                       font-size: 14px;
                                       padding: 0 10px 5px 0;
                                       font-weight: 600;
                                       margin: 0;
                                       }
                                       .s0902 .s0902-block h3 span {
                                       display: inline-block;
                                       padding: 0;
                                       }
                                       .s0902 .s0902-block span {
                                       font-size: 12px;
                                       display: block;
                                       color: #8d8f92;
                                       padding-bottom: 5px;
                                       }
                                       .s0902 .s0902-block a.btn {
                                       background: #276324;
                                       border-radius: 5px;
                                       padding: 0;
                                       margin: 0;
                                       height: auto;
                                       line-height: 32px;
                                       }
                                       .s0902 .s0902-block a.btn:hover {
                                       background: #f7b945;
                                       }
                                       .s0902 .s0902-image {
                                       background: #fff;
                                       max-height: 100px;
                                       overflow: hidden;
                                       border-radius: 5px;
                                       }
                                       .s0902 .s0902-image img {
                                       height: 80px;
                                       margin: 0 auto;
                                       display: block;
                                       }
                                       .modal-close-button-r3 a {
                                       display: block;
                                       background-color: #666;
                                       width: 30px;
                                       height: 30px;
                                       line-height: 30px;
                                       text-align: center;
                                       border-radius: 50%;
                                       }
                                    </style>
                                 </div>
                                 <!----><!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="anindaparazulav2-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Anında Parazula Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-2068.png" width="100" height="33" class="anindaparazulav2-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Anında Parazula Deposit">Anında Parazula Deposit</h5>
                                                <small>Anında Parazula Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="envoyqr-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Envoy Hızlı QR Yatırım">Envoy Hızlı QR Yatırım</h5>
                                                <small>Envoy Hızlı QR Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span>/ anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺10,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="anindahesap-metefe-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Popy Pay Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-853.png" width="100" height="33" class="anindahesap-metefe-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Popy Pay Deposit">Popy Pay Deposit</h5>
                                                <small>Popy Pay Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺125,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="vizapaymulti-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Vizapay Multi Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1653.png" width="100" height="33" class="vizapaymulti-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Vizapay Multi Deposit">Vizapay Multi Deposit</h5>
                                                <small>Vizapay Multi Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="paysend-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Paysend Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1919.png" width="100" height="33" class="paysend-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Paysend Deposit">Paysend Deposit</h5>
                                                <small>Paysend Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="favexpapara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=FavexPapara Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1454.png" width="100" height="33" class="favexpapara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="FavexPapara Deposit">FavexPapara Deposit</h5>
                                                <small>FavexPapara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="favexhavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=FavexHavale Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1458.png" width="100" height="33" class="favexhavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="FavexHavale Deposit">FavexHavale Deposit</h5>
                                                <small>FavexHavale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="favexpaybol-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Favex Paybol Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1593.png" width="100" height="33" class="favexpaybol-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Favex Paybol Deposit">Favex Paybol Deposit</h5>
                                                <small>Favex Paybol Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺20.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="trink-havale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=TrinkHavale Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1234.png" width="100" height="33" class="trink-havale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="TrinkHavale Deposit">TrinkHavale Deposit</h5>
                                                <small>TrinkHavale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺250,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="manypay-credit-card-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Manypay Credit Card Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1494.png" width="100" height="33" class="manypay-credit-card-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Manypay Credit Card Deposit">Manypay Credit Card Deposit</h5>
                                                <small>Kredi Kartı ve Banka Kartı Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺5,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="safirhavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Safirhavale Deposit">Safirhavale Deposit</h5>
                                                <small>Safirhavale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="upaycoins-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Youpaycoin Yatırım">Youpaycoin Yatırım</h5>
                                                <small>Youpaycoin Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺310.00 / Max: ₺150,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="scashmoney-hizliodemeler-transfer-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Garanti Havale Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1989.png" width="100" height="33" class="scashmoney-hizliodemeler-transfer-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Garanti Havale Yatırım">Garanti Havale Yatırım</h5>
                                                <small>Garanti Havale Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="scashmoney-hizliodemeler-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Garanti Papara Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1991.png" width="100" height="33" class="scashmoney-hizliodemeler-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Garanti Papara Yatırım">Garanti Papara Yatırım</h5>
                                                <small>Garanti Papara Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="pgs-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=PGS Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-2099.png" width="100" height="33" class="pgs-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="PGS Deposit">PGS Deposit</h5>
                                                <small>PGS Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                    <div class="flex-container">
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Banka Transferi</h5>
                                             <small>Banka Havalesi ile Yatırım</small><!----><!---->
                                          </div>
                                       </div>
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span>/ 2-5 dk <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="MOBILEBANK">
                                    <div class="flex-container">
                                       <!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" hidden="" class="hide"><img src="//v3.pronetstatic.com/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Atm/Cep Bank ile Transfer</h5>
                                             <small>Mobil bankacılık ile yatırım</small>
                                          </div>
                                       </div>
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span>/ 10 ~ 30  <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺2,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="paytu-crypto-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Payyu Crypto Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-2179.png" width="100" height="33" class="paytu-crypto-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Payyu Crypto Deposit">Payyu Crypto Deposit</h5>
                                                <small>Payyu Crypto Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺1,000,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="scashmoney-hizliodemeler-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Garanti Tüm Yatırımlar" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1988.png" width="100" height="33" class="scashmoney-hizliodemeler-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Garanti Tüm Yatırımlar">Garanti Tüm Yatırımlar</h5>
                                                <small>Garanti Tüm Yatırımlar ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="scashmoney-hizliodemeler-fast-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Garanti Fast Yatırım" class="scashmoney-hizliodemeler-fast-deposit"><img hidden="" src="//v3.pronetstatic.com/perabet/upload_files/deposit-1990.png" width="100" height="33" class="hide"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Garanti Fast Yatırım">Garanti Fast Yatırım</h5>
                                                <small>Garanti Fast Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="paparaform-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Papara Form Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-852.png" width="100" height="33" class="paparaform-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Papara Form Yatırım">Papara Form Yatırım</h5>
                                                <small>Papara Form Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺250,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="pay-fix-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Payfix Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/common/assets/images/payments/deposit-777.png" width="100" height="33" class="pay-fix-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Payfix Yatırım">Payfix Yatırım</h5>
                                                <small>Payfix Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺25.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="softpay-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=SoftPay Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="SoftPay Deposit">SoftPay Deposit</h5>
                                                <small>SoftPay Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="joy-havale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Joy Havale ile Para Yatırma" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1495.png" width="100" height="33" class="joy-havale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Joy Havale ile Para Yatırma">Joy Havale ile Para Yatırma</h5>
                                                <small>Joy Havale ile Para Yatırma ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="enhizlihavale-bank-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=EN HIZLI HAVALE Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1681.png" width="100" height="33" class="enhizlihavale-bank-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="EN HIZLI HAVALE Deposit">EN HIZLI HAVALE Deposit</h5>
                                                <small>EN HIZLI HAVALE Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="joym100-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Joym 100 Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1701.png" width="100" height="33" class="joym100-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Joym 100 Deposit">Joym 100 Deposit</h5>
                                                <small>Joym 100 Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="anindaislem-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Premium Vip Papara Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1824.png" width="100" height="33" class="anindaislem-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Premium Vip Papara Deposit">Premium Vip Papara Deposit</h5>
                                                <small>Premium Vip Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="anindamefetev2-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Anında PayPay Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-1845.png" width="100" height="33" class="anindamefetev2-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Anında PayPay Yatırım">Anında PayPay Yatırım</h5>
                                                <small>Anında PayPay Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺25.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="anindabtcv2-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=Anında Kripto Yatırım" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-2013.png" width="100" height="33" class="anindabtcv2-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="Anında Kripto Yatırım">Anında Kripto Yatırım</h5>
                                                <small>Anında Kripto Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺5,000,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                              <div class="col s12">
                                 <div class="card-panel bank-card" data-payment="espaycash-banktransfer-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon>
                                          <img src="https://via.placeholder.com/100x33.png?text=EsPay Cash Bank Transfer Deposit" class="hide" hidden=""><img src="//v3.pronetstatic.com/perabet/upload_files/deposit-2196.png" width="100" height="33" class="espaycash-banktransfer-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts">
                                                <h5 title="EsPay Cash Bank Transfer Deposit">EsPay Cash Bank Transfer Deposit</h5>
                                                <small>EsPay Cash Bank Transfer Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                        </div>
                        <app-static-inner-content contentcode="deposit-bottom">
                           <!---->
                        </app-static-inner-content>
                        <!----><!---->
                     </div>
                     <div id="PaymentFormModal" materialize="modal" class="modal open dshbrd-modal pymnt-mdl" style="z-index: 1021;">
                        <!---->
                     </div>
                     <div id="confirmPromptModal" materialize="modal" class="modal modal-sm dshbrd-modal" style="z-index: 1023;">
                        <app-confirm-promt>
                           <!---->
                        </app-confirm-promt>
                     </div>
                     <!---->
                  </deposit-withdraw-money>
               </app-deposit-money>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>