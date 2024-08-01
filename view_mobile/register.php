<div id="allCnt">
   <app-static-inner-content contentcode="m_header_content_area">
      <!---->
   </app-static-inner-content>
   <app-bottom-menu>
      <div class="bottom-fixed-controls">
         <div class="bottom-fixed-wrapper flex-container">
            <a routerlinkactive="active" href="/casino" class="flex-item truncate" id="undefined">
               <i class="icon foot-icon cherry"></i><!----><!----> Casino 
            </a>
            <!----><!----><!----><!---->
            <a routerlinkactive="active" href="/livecasino" class="flex-item truncate" id="undefined">
               <i class="icon foot-icon cards-fill"></i><!----><!----> Canlı Casino 
            </a>
            <!----><!----><!----><!----><!----><!---->
            <a href="javascript:;" class="button-collapse right-sidebar coupon" id="bslpb">
               <i aria-hidden="true" class="fa fa-plus"></i><!---->
            </a>
            <!----><!---->
            <a routerlinkactive="active" href="/live" class="flex-item truncate" id="undefined">
               <!----><i class="material-icons foot-icon">ondemand_video</i><!----> Canlı Bahis 
            </a>
            <!----><!----><!----><!----><!---->
            <a target="_blank'" class="flex-item truncate" id="lc-c" href="https://lc.chat/now/10747192/">
               <!----><i class="material-icons foot-icon">mode_comment</i><!----> Destek 
            </a>
            <!----><!----><!----><!---->
         </div>
      </div>
      <div id="BalanceModal" materialize="modal" class="modal modal-md" style="z-index: 1041;">
         <!---->
      </div>
   </app-bottom-menu>
   <!---->
   <main>
      <router-outlet></router-outlet>
      <app-authentication>
         <router-outlet></router-outlet>
         <app-signup>
            <div class="breadcrumb-wrapper flex-container">
               <div class="breadcrumbs-cont flex-container flex-item"><a onclick="history.back()" class="breadcrumb"><i class="icon chevron-right pg-icons"></i></a><a href="javascript:;" class="breadcrumb">Üye Ol</a></div>
               <div class="filter-toggle"><a class="register-close"><i class="fa fa-times"></i></a></div>
            </div>
            <div class="row">
               <div class="col s12">
                  <app-static-inner-content contentcode="m_signupTop">
                     <!---->
                  </app-static-inner-content>
               </div>
            </div>
            <div class="register-page">
               <!---->
               <ul class="tabs">
                  <li class="tab">
                     <a href="javascript:;" class="active">
                        <span class="tab-count"> 1 </span><span class="text">Hesap Bilgileri</span><!---->
                     </a>
                  </li>
                  <li class="tab">
                     <a href="javascript:;">
                        <span class="tab-count"> 2 </span><span class="text">Kişisel Bilgiler</span><!---->
                     </a>
                  </li>
                  <li class="tab">
                     <a href="javascript:;">
                        <span class="tab-count"> 3 </span><span class="text">Bilgileri Onayla</span><!---->
                     </a>
                  </li>
                  <!---->
               </ul>
               <!---->
               <form novalidate="" class="ng-untouched ng-pristine ng-valid" action="javascript:;" onsubmit="logIn()" id="register_form">
                  <div ngmodelgroup="signUpFields" class="row ng-untouched ng-pristine ng-invalid">
                     <div id="step-ACCOUNT">
                        <!----><!---->
                        <div autocapitalize="none" class="input-field required">
                           <span class="field-label required">Kullanıcı adı </span><!----><!---->
                           <div class="cpf-number-loading">
                              <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" name="login" id="username" placeholder="" type="text" required=""><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                           <div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!---->
                        <div class="flex-container input-group align-items-res">
                           <div class="input-field required">
                              <span class="field-label required">Ad </span><!----><input type="text" autocapitalize="none" class="validate browser-default place-text ng-untouched ng-pristine ng-invalid" id="firstName" placeholder="" required=""><!---->
                           </div>
                           <div class="suffix-field"><input type="checkbox" id="filled-in-box" checked="checked" class="filled-in ng-untouched ng-pristine ng-valid"><label for="filled-in-box">İkinci adım var</label></div>
                           <!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div autocapitalize="none" class="input-field required">
                           <span class="field-label required">Soyad </span><!----><!---->
                           <div class="cpf-number-loading">
                              <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="surname" placeholder="" type="text" required=""><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                           <div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div autocapitalize="none" class="input-field required">
                           <span class="field-label required">E-posta </span><!----><!---->
                           <div class="cpf-number-loading">
                              <!----><!----><!----><input debounce="500" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="email" placeholder="" type="email" required="" maxlength="100" pattern="^\s*(([^<>()\[\]\\,`~;:$%^*#№\s@&quot;]{2,})|(&quot;.+&quot;))@(([a-zA-Z0-9^(-?)]+\.)+[a-zA-Z]{2,})\s*$"><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                           <div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div autocapitalize="none" class="input-field required">
                           <span class="field-label required">Telefon </span><!----><!---->
                           <div class="cpf-number-loading">
                              <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                           <div>
                              <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                 <div class="iti__flag-container">
                                    <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="Turkey (Türkiye): +90" aria-activedescendant="iti-0__item-tr-preferred">
                                       <div class="iti__flag iti__tr"></div>
                                       <div class="iti__selected-dial-code">+90</div>
                                       <div class="iti__arrow"></div>
                                    </div>
                                 </div>
                                 <input type="text" ng2telinput="" name="phone" class="browser-default ng-untouched ng-pristine ng-invalid" id="phone" placeholder="501 234 56 78" autocomplete="off" data-intl-tel-input-id="0" style="padding-left: 76px;">
                              </div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <app-notifications>
                           <div>
                              <!---->
                           </div>
                        </app-notifications>
                        <div class="flex-container step-btns">
                           <!----><a href="javascript:;" class="btn next-btn flex-item truncate"> Kişisel Bilgilere Gidin </a><!----><!----><!----><!----><!----><!----><!---->
                        </div>
                     </div>
                     <!---->
                     <div id="step-PERSONAL" hidden="">
                        <!----><!---->
                        <div autocapitalize="none" class="input-field password bubble required">
                           <span class="field-label required">Şifreniz </span><!----><!---->
                           <div class="cpf-number-loading">
                              <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" name="password" id="password" placeholder="" type="password" required="" maxlength="25"><!----><!----><!----><!----><!----><!---->
                              <bubble-validator position="right">
                                 <div class="bubble-vldtr right">
                                    <ul class="vldtr-lst">
                                       <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                       <!----><!---->
                                       <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                       <!----><!---->
                                       <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                       <!----><!----><!----><!---->
                                       <li class="truncate"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                       <!----><!----><!---->
                                    </ul>
                                 </div>
                              </bubble-validator>
                              <!---->
                              <password-eye el="password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                              <!----><!----><!---->
                           </div>
                           <div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div autocapitalize="none" class="input-field">
                           <span class="field-label">Güvenli Kelime </span><!----><!---->
                           <div class="cpf-number-loading">
                              <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-valid" id="safeWord" placeholder="(opsiyonel)" type="text"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                           </div>
                           <div>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div class="select-field required">
                           <span class="field-label required"> Para Birimi </span><!---->
                           <div>
                              <select select-modal="" class="browser-default ng-untouched ng-pristine ng-valid" id="currencyId" required="" style="flex: 3 1 0%;">
                                 <option selected="" value="" disabled="">Seçiniz</option>
                                 <!---->
                                 <option value="1">Türk Lirası</option>
                                 <!----><!----><!----><!----><!----><!---->
                              </select>
                              <!----><!---->
                           </div>
                           <!----><!----><!----><!----><!----><!---->
                        </div>
                        <!----><!----><!----><!----><!----><!----><!---->
                        <div autocapitalize="none" class="input-field required">
                           <span class="field-label required">Doğum Tarihi </span><!---->
                           <birthdate-input>
<form novalidate="" class="ng-untouched ng-pristine ng-invalid">
   <div class="flex-container">
      <div class="flex-item">
         <div class="select-field">
            <select id="days" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
               <option selected="" value="" disabled="">Gün</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
               <option value="31">31</option>
               <!---->
            </select>
         </div>
      </div>
      <div class="flex-item">
         <div class="select-field">
            <select id="months" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
               <option selected="" value="" disabled="">Ay</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <!---->
            </select>
         </div>
      </div>
      <div class="flex-item">
         <div class="select-field">
            <select id="years" select-modal="" class="browser-default ng-untouched ng-pristine ng-invalid">
               <option selected="" value="" disabled="">Yıl</option>
               <option value="2006">2006</option>
               <option value="2005">2005</option>
               <option value="2004">2004</option>
               <option value="2003">2003</option>
               <option value="2002">2002</option>
               <option value="2001">2001</option>
               <option value="2000">2000</option>
               <option value="1999">1999</option>
               <option value="1998">1998</option>
               <option value="1997">1997</option>
               <option value="1996">1996</option>
               <option value="1995">1995</option>
               <option value="1994">1994</option>
               <option value="1993">1993</option>
               <option value="1992">1992</option>
               <option value="1991">1991</option>
               <option value="1990">1990</option>
               <option value="1989">1989</option>
               <option value="1988">1988</option>
               <option value="1987">1987</option>
               <option value="1986">1986</option>
               <option value="1985">1985</option>
               <option value="1984">1984</option>
               <option value="1983">1983</option>
               <option value="1982">1982</option>
               <option value="1981">1981</option>
               <option value="1980">1980</option>
               <option value="1979">1979</option>
               <option value="1978">1978</option>
               <option value="1977">1977</option>
               <option value="1976">1976</option>
               <option value="1975">1975</option>
               <option value="1974">1974</option>
               <option value="1973">1973</option>
               <option value="1972">1972</option>
               <option value="1971">1971</option>
               <option value="1970">1970</option>
               <option value="1969">1969</option>
               <option value="1968">1968</option>
               <option value="1967">1967</option>
               <option value="1966">1966</option>
               <option value="1965">1965</option>
               <option value="1964">1964</option>
               <option value="1963">1963</option>
               <option value="1962">1962</option>
               <option value="1961">1961</option>
               <option value="1960">1960</option>
               <option value="1959">1959</option>
               <option value="1958">1958</option>
               <option value="1957">1957</option>
               <option value="1956">1956</option>
               <option value="1955">1955</option>
               <option value="1954">1954</option>
               <option value="1953">1953</option>
               <option value="1952">1952</option>
               <option value="1951">1951</option>
               <option value="1950">1950</option>
               <option value="1949">1949</option>
               <option value="1948">1948</option>
               <option value="1947">1947</option>
               <option value="1946">1946</option>
               <option value="1945">1945</option>
               <option value="1944">1944</option>
               <option value="1943">1943</option>
               <option value="1942">1942</option>
               <option value="1941">1941</option>
               <option value="1940">1940</option>
               <option value="1939">1939</option>
               <option value="1938">1938</option>
               <option value="1937">1937</option>
               <option value="1936">1936</option>
               <option value="1935">1935</option>
               <option value="1934">1934</option>
               <option value="1933">1933</option>
               <option value="1932">1932</option>
               <option value="1931">1931</option>
               <option value="1930">1930</option>
               <option value="1929">1929</option>
               <option value="1928">1928</option>
               <option value="1927">1927</option>
               <option value="1926">1926</option>
               <option value="1925">1925</option>
               <option value="1924">1924</option>
               <!---->
            </select>
         </div>
      </div>
   </div>
</form>
</birthdate-input><!----><!---->
<div class="cpf-number-loading">
   <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
</div>
<div>
   <!----><!---->
</div>
<!----><!----><!----><!----></div><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div autocapitalize="none" class="input-field required">
   <span class="field-label required">Kimlik </span><!----><!---->
   <div class="cpf-number-loading">
      <input debounce="2000" class="browser-default place-text ng-untouched ng-pristine ng-invalid" id="identity" placeholder="" type="text" required=""><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
   </div>
   <div>
      <!----><!---->
   </div>
   <!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div class="select-field">
   <!----><!----><!----><!----><!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!----><!---->
<div class="select-field">
   <!----><!----><!----><!----><!----><!----><!----><!---->
</div>
<!----><!----><!----><!----><!----><!----><!----><!---->
<app-notifications>
   <div>
      <!---->
   </div>
</app-notifications>
<div class="flex-container step-btns">
   <a href="javascript:;" class="btn prev-btn flex-item truncate"> Hesap Bilgilerine Gidin </a><!----><a href="javascript:;" class="btn next-btn flex-item truncate"> Bilgileri Onayla </a><!----><!----><!----><!----><!----><!----><!---->
</div>
</div><!---->
<div id="step-confirmation" hidden="">
   <div class="register-info"><span>Perabet sitesine kayıt olunurken, hesabınızın teyidi ve güvenliği için doğru kişisel bilgiler gerekir. Bunu yapmayanların hesapları dondurulur ve/veya hesap temelli olarak feshedilir. Müşteriler kendi ülkelerinin bahis oynama yasalarının getirdiği sorumlulukla hareket ederler. Perabet açıklama yapmadan herhangi bir üyeliği reddetme hakkına sahiptir.</span></div>
   <!----><!----><!----><!----><!----><!----><!----><!---->
   <div class="checkbox-field mar-top-10">
      <input type="checkbox" class="filled-in ng-untouched ng-pristine ng-invalid" name="termsAndConditions" id="termsAndConditions" required="">
      <label for="termsAndConditions">
         <span class="required-icon"></span><!----> Yukarıda verdiğim bilgilerin doğru olduğunu teyit ederim. Ayrıca tüm kuralları, şartları, koşulları, politikaları ve ilgili diğer site kuralları okuduğumu ve kabul ettiğimi onaylıyorum. <a class="blue-text termsAndConditions">şartlar ve koşullar. </a><!----><!----><!----><!---->
      </label>
      <!---->
   </div>
   <!----><!----><!----><!----><!---->
   <app-notifications>
      <div>
         <!---->
      </div>
   </app-notifications>
   <div class="flex-container step-btns">
      <a href="javascript:;" class="btn prev-btn flex-item truncate"> Kişisel Bilgilere Gidin </a><!----><!----><button type="submit" class="btn next-btn flex-item register-btn truncate"> Üye Ol </button><!----><!----><!----><!----><!----><!---->
   </div>
</div>
<!----><!----></div></form><!----><!----></div>
            <!----><!---->
            <div class="row">
               <div class="col s12">
                  <app-static-inner-content contentcode="signupBottom">
                     <!---->
                  </app-static-inner-content>
               </div>
            </div>
            <!---->
            <div id="termsAndConditionsModal" materialize="modal" class="modal" style="z-index: 1049;">
               <div class="mdl-hdr">
                  <div class="header-content">
                     <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
                  </div>
               </div>
               <div class="modal-content">
                  <app-static-inner-content contentcode="about-us-gen-terms-cond">
                     <div extroutelink="" id="about-us-gen-terms-cond">
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           Genel Kurallar ve Şartlar
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           1. GİRİŞ
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           1.1 Yukarıda listelenen Hükümler ve Koşulların tümü birden "Hükümler" veya
                           "Anlaşmalar" olarak anılacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           1.2 Hükümler ve Koşullar'da, "bahis" veya "bahis yapma" diye geçen herhangi
                           bir terim, Perabet web sitesi üzerinden gerçek veya sanal para ile oynanan
                           spor, casino, poker ve diğer şans oyunlarını ifade edecektir. Sözü edilen
                           bu tür oyunlar ayrıca "Hizmetler" olarak da anılacaktır. "Siz", "sizin",
                           "müşteri" veya "oyuncu" diye addedilen tüm şartlar, Perabet’i veya
                           hizmetlerini kullanan tüm şahıslar ve/veya Perabet’e kayıtlı müşterilerdir.
                           "Biz", "bize" ve "bizim" diye geçen terimler Perabet şirketine
                           kasttedmektedir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           1.3 Sorumlu Kumar Oynama Politikası, Kullanım Koşulları, Gizlilik
                           Politikası, Bahis Kuralları, Spor Bahisleri kuralları ve düzenlemeleri,
                           Casino Bahisleri kuralları ve yönetmeliği ile Perabet Hizmetlerine
                           uygulanan herhangi bir kural ve yönetmelik, Hükümlerin ayrılmaz bir parçası
                           olarak kabul edilmelidirler. Herhangi bir çatışma durumunda, tüm hükümler
                           ve koşullar, kurallar ve düzenlemelerle birlikte işbu metinde veya
                           websitesinde geçerli politikalar çapraz referans olarak incelenecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           1.4 Genel Hüküm ve Koşullara herhangi bir zamanda değişiklik yapma veya
                           değiştirme yetkisi Perabet sitesine aittir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2. HESAP AÇMA
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.1 Oyuncular, ikamet ettikleri bölgelerdeki yargı merciinin öngördüğü
                           online bahis kurallarını ve düzenlemelerini bilmelidirler.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="font-family: Arial, sans-serif; font-size: small; letter-spacing: -0.25pt; color: rgb(255, 255, 255);">2.2
                           ABD, İsrail, İngiliz Virgin Adaları, Filipinler ve Hollanda Antilleri'nde
                           ikamet edenlerin hesap açmalarına izin verilmez. Bu yargı bölgelerinde olduğu
                           tespit edilen (geçici veya diğer, ulusal veya bu ülkelerin IP'lerini
                           kullanarak) kişilerin yapmış olduğu bahisler, Perabet in takdirine bağlı olarak
                           iptal edilecektir ve sadece ilk yatırmış oldukları miktar iade edilecektir.</span>
                        </div>
                        <div style="">
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 i.
                                 Buna ek olarak, Perabet belirtilen ülkeler için hiçbir koşulda NetEnt
                                 oyunlarına katılmasına izin vermemektedir: Afganistan, Arnavutluk, Cezayir,
                                 Angola, Avustralya, Bahamalar, Botswana, Kamboçya, Ekvador, Etiyopya, Gana,
                                 Guyana, Hong Kong, İran, Irak, İsrail, Kuveyt, Laos, Myanmar, Namibya,
                                 Nikaragua, Kuzey Kore, Pakistan, Panama, Papua Yeni Gine, Filipinler, Singapur,
                                 Sri Lanka, Sudan, Suriye, Tayvan, Trinidad ve Tobago, Tunus, Uganda, Yemen ve
                                 Zimbabve.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 ii.
                                 Perabet, NetEnt'e sunulan ve NetEnt tarafından onaylanan belirli yargı
                                 yetkisinin, yetkili lisans makamından geçerli oyun türü için yerel bir uzaktan
                                 oyun lisansına sahip olmadıkça, Perabet gerçek parayla NetEnt oyunlarını
                                 belirli ülkelere sunamaz.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; font-size: small; color: rgb(255, 255, 255);">
                                 Belirli
                                 bir yargı yetkisinin birden çok devlete veya bölgeye bölünmesi durumunda, Perabet
                                 yerel uzaktan oyun lisansının, özel olarak izin verdiği sürece sadece bu tür
                                 bir eyalette ya da bölgede gerçek parayla NetEnt oyunları sunulabilir.
                                 <o:p></o:p>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">Şu
                                 anda yerel bir lisansa sahip olmayan bölgeler şunlardır: </span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;">Belçika, Bulgaristan, Çek Cumhuriyeti, Danimarka,
                                 Estonya, Fransa, İtalya, Letonya, Litvanya, Meksika, Portekiz, Romanya,
                                 Sırbistan, İspanya, İsveç, İsviçre, Amerika Birleşik Devletleri ve İngiltere.</span>
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <strong>
                                 <span style="font-family: Arial, sans-serif; font-weight: normal; font-size: small; color: rgb(255, 255, 255);">
                                    iii. Yukarıda belirtilen Ülkelere ek olarak,
                                    NetEnt’in Lisanslı müşterileri, yerel bir Lisans sahibi olsa bile, NetEnt’in
                                    Havuzlu Jackpot Oyunlarını ve Pooled Jackpot Oyunlarının mobil versiyonlarını
                                    (Hall of Gods, Arabian Nights, Mega Fortune &amp; Mega Fortune Dreams) teklif
                                    etmesi yasaktır. Yasaklı Ülkeler: Azerbaycan, Çin, Curacao, Danimarka,
                                    Hindistan, İtalya, Japonya, Malezya, Katar, Rusya, İspanya, Tayland, Türkiye,
                                    Birleşik Arap Emirlikleri, Ukrayna.
                                    <o:p></o:p>
                                 </span>
                              </strong>
                           </p>
                           <span style="font-size: small; color: rgb(255, 255, 255);">
                              <u1:p></u1:p>
                           </span>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.
                                 Ayrıca Perabet,&nbsp; Azerbaycan, Çin, Hindistan, Malezya, Katar, Rusya,
                                 Tayland, Tunus, Türkiye ve Ukrayna'da ikamet edenler için bir yerel Lisans
                                 düzenlenmiş olsa bile NetEnt Markalı Oyunlarını ve Markalı Oyunların mobil
                                 versiyonlarını </span><span style="font-family: Arial, sans-serif;">Jumanji video slot, Emojiplanet video slot, Conan video slot,
                                 NetEnt Rocks Games consisting of Guns N’ Roses, Jimi Hendrix, Ozzy Osbourne and Motorhead
                                 video slots, Planet of the Apes video slot and The Universal Monster Slot Games
                                 consisting of Frankenstein, the Bride of Frankenstein, Dracula, The Mummy, The
                                 Wolf Man, Creature from the Black Lagoon, The Invisible Man, The Phantom of the
                                 Opera and Scudamore’s Super Stakes (© 2019, NetEnt Product Services Ltd.
                                 Scudamore Super Stakes is a trademark of NetEnt Product Services. All Rights
                                 Reserved)</span>
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                    &nbsp;sunamaz.
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-size: small; color: rgb(255, 255, 255);">
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">iv.i
                                 Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak, Afganistan,
                                 Arnavutluk, Cezayir, Angola, Avustralya, Azerbaycan, Kamboçya, Kanada, Çin,
                                 Ekvador, Fransa, Guyana, Hong Kong, Hindistan, Endonezya, İran, Irak, İsrail,
                                 Kuveyt, Laos, Malezya, Myanmar, Namibya, Kuzey Kore, Pakistan, Papua Yeni Gine,
                                 Filipinler, Katar, Rusya, Singapur, Güney Kore, Sudan, Suriye, Tayvan, Tayland,
                                 Tunus, Türkiye, Ukrayna, Amerika Birleşik Devletleri (özel lisans anlaşması
                                 alması gereken New Jersey ve Pennsylvania Devletleri hariç) ve Uganda ‘da yerel
                                 bir lisans sahibi olsa bile; "</span><span style="font-family: Arial, sans-serif; letter-spacing: -0.5pt;"> Vikings Video Slot </span>
                                 <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt;">
                                    " (bu markalı oyunun mobil versiyonları da dahil
                                    olmak üzere) Perabet tarafından sunulmamaktadır.
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                           <p class="MsoNormal" style="line-height: normal;">
                              <span style="font-family: Arial, sans-serif; letter-spacing: -0.25pt; color: rgb(255, 255, 255);">
                                 <span style="font-size: small;">iv.ii
                                 Yukarıdaki madde 2.2 (iv) 'de belirtilen yetki bölgelerine ek olarak, Endonezya
                                 ve Güney Kore' de yerel bir lisans sahibi olsa bile; "Narcos Video
                                 Slot" (bu markalı oyunun mobil versiyonları da dahil olmak üzere) Perabet
                                 tarafından sunulmamaktadır.</span>
                                 <span style="font-size: 12pt;">
                                    <o:p></o:p>
                                 </span>
                              </span>
                           </p>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);"><br></span></div>
                        <div style="font-size: 10pt;">
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.3 Perabet web sitesinin, etkin bir şekilde yasak bölgeler listesine dahil
                           edilmemiş bölgelerde hizmet sunma kapasitesini sürekli denetlemektedir.
                           Perabet hizmetlerini, belirli bir bölgeye daha fazla sağlayacak bir konumda
                           olmadığında (gerek yasal, ticari veya herhangi başka bir nedenden dolayı),
                           Perabet gerektiğince Hükümlerin ilgili bölümlerini gözden geçirir ve
                           inceler.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.4 Perabet tarafından yeni bir bölge yasak bölge listesine eklendiğinde,
                           sınırlandırılmış bölgede ikamet ettiği tespit edilen müşterilerin hesapları
                           derhal kapatılır. Müşterinin, yeni kısıtlanmış bir bölgede oturmakta olduğu
                           belirlendiği durumlarda, ikamet bölgesi yasak topraklar listesine dahil
                           edildiğinde tamamlanmamış olan bahisleri olduğu takdirde Perabet bu tür
                           bahisleri geçersiz sayma hakkını saklı tutar, ve müşterilerin bahis
                           yatırımlarını iade eder. Müşterinin ikamet ettiği bölge yasak bölgeler
                           listesine girdiği an itibariyle hem tamamlanan hem de henüz gerçekleşmemiş
                           olan bahis oyunlarına birikmiş kazancıyla çoklu kombin bahis yapmışsa eğer
                           Perabet bu gibi durumlarda, bahis kuponundan henüz daha gerçekleşmemiş
                           oyunları çıkarttıktan sonra tamamlanmış oyunların sonuçlarına göre
                           oranlarını sırayla yeniden hesaplar. Bahsedilen yeni hesaplama işleminden
                           sonra, bir müşteri pozitif bir sonuca sahip olduğu durumlarda, Hükümlerin
                           6.ıncı bölümündeki 'Ödemeler' ve 'Kazançlar'a’ uygun olarak ödeme yapılır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.5 Yasalar ya da herhangi bir diğer düzenleyici kural tarafından
                           yasaklanmış bölgelerde Perabet web sitesinin erişilebilir olması, müşteri
                           tarafından Perabet 'in söz konusu hizmetlerinin kumar hizmeti sağlama
                           haklılığı olarak yorumlanmamalıdır. Böyle bir erişilebilirlik durumu, bir
                           müşteri tarafından, sitenin oluşturduğu bir hizmet teklifi olarak veya bu
                           hizmet teklifinin dayatması veya sitenin herhangi bir hizmetinden
                           faydalanma daveti olarak algılanmamalıdır. Bir müşterinin Perabet
                           hizmetlerinden faydalanmasının bir sonucu olarak meydana gelebilecek
                           herhangi bir kanun veya yönetmelik ihlalinden hiçbir surete Perabet sorumlu
                           değildir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.6 Perabet, yalnızca on sekiz (18) yaşını doldurmuş veya kumar ya da bahis
                           oyunları oynama faaliyetlerinin kendi yetki alanları içerisinde geçerli
                           olan kanuna göre yasal yaştaki müşterileri kabul etmektedir. Yasaya aykırı
                           olan oyuncuların hesapları kapatılır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.7 Herhangi bir sınırlama olmaksızın doğru kayıt bilgilerinizi, doğum
                           tarihiniz, ikamet ettiğiniz ülkeniz, geçerli adresiniz, telefon ve kimlik
                           bilgileriniz dahil olmak üzere vermeyi kabul ediyorsunuz. Bu tür
                           ayrıntılardaki değişiklikleri bize bildirmeyi kabul ediyorsunuz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.8 Müşteri hesaplarının 30 ay kullanılmadığı durumlarda veya müşterinin
                           nerede olduğu bilinmediğinde, Perabet hesap bakiyesini iptal etme hakkını
                           saklı tutar. Bu koşullar altında hesapları iptal etme yetkisi bulunan
                           makama hiçbir surette başvuru yapılamaz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.9 Çalışanların, hizmet sunucuların eski çalışanlarının ve/veya bağlı
                           şirketlerin elemanlarının bahis hesaplarını açmalarına izin verilmemektedir
                           ve Perabet hizmetlerini ve promosyonlarını kendilerine avantaj sağlayarak
                           kullanamazlar. Aynı kurallar, yukarıda belirtilen şahısların aile üyeleri
                           için de geçerlidir. Bu kuralın ihlal edilmesi hesabın kalıcı olarak
                           kapatılmasına ve sözkonusu hesapların dolandırıcılık olarak
                           değerlendirilmesine neden olacaktır. Bu gibi faaliyetlerden doğan herhangi
                           bir kazanç, hesap sahibinin feshi gibi kabul edilecek ve sadece yatırılan
                           tutar hesap sahibine iade edecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           2.10 Perabet, herhangi bir Şirket personeline yönelik hakaret içeren,
                           küfür, müstehcen, ırkçı, cinsiyet ayrımcılığı, ayrımcılık veya başka
                           şekillerde saldırgan olan herhangi bir dili kabul etmez ve bu tür bir
                           olayın gerçekleşmesi durumunda herhangi bir uyarı yapmadan hesapları
                           kapatma hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3. KİŞİSEL BAHİS OYUNLARI HESABINIZ
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.1 Hesabınızdaki ad, sizin gerçek, yasal adınız ve kimliğinizle
                           eşleşmelidir. Finansal işlemleriniz (hesap finansman seçenekleriniz),
                           hesabınızı finanse ettiğiniz veya hesabınızdan para çektiğiniz kredi kartı
                           veya diğer ödeme hesaplarının adıyla eşleşmelidir. Bahis oyunları ve para
                           yatırma hesaplarınız arasındaki ad ayrıntılarında tesbit edilen herhangi
                           bir tutarsızlık, Hükümler’in ihlali olarak kabul edilecek ve bu durumda
                           hesap bakiyeniz geçici olarak askıya alınacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.2 Müşterilerimizi Tanıyalım programımız çerçevesinde, para yatıran ve
                           çeken tüm müşterilerin, gerektiği herhangi bir zamanda, kimlik kanıtı,
                           adres kanıtı ve ödeme kimliği kanıtı, ibraz etmeleri gerekir. Kimliğinizi
                           doğrulamak için, herhangi bir zaman, geçerli bir pasaport / kimlik kartı /
                           sürüş ehliyeti ve / veya kimlik ispatı için tatmin edici belgeler dahil
                           ancak bunlarla sınırlı olmayan; yine uygun adres kanıtı, üç aydan eski
                           olmayan yeni bir kamu hizmet faturası dahil ancak bunlarla sınırlı olmayan
                           tatmin edici bir adres belgesi talep etme hakkımızı saklı tutuyoruz.
                           Gerekli incelemeler makul zaman çerçevesinde yapılacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.3 Kara Para Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle
                           ilgili 2006 Kanun ve sistemin doğruluğu ve bütünlüğü bağlamında yüksek bir
                           güvenlik seviyesini korumak ve Perabet Hizmet kullanımınızı doğrulamak
                           için, herhangi bir zaman kimliğinizi, yaşınızı ve / veya bize sağladığınız
                           kayıt verilerini (bir 'Güvenlik İncelemesi') bağlamında doğrulama hakkımızı
                           saklı tutuyoruz. Bunlar sizin Perabet’in sözleşmelerine ve koşullarına
                           uymanız ve Perabet koşullarının ve şartlarının ve bağlantılı herhangi
                           yasanın ihlal edilme potansiyeline karşı mali işlemlerinizi Hizmetler
                           aracılığıyla gerçekleştirmeniz dahil ancak bunlarla sınırlı olmayan şekilde
                           olabilir. Bize ve acentelerimize hakkınızda gereken ilgili herhangi
                           soruşturmayı yapmamız için, ve bize verdiğiniz bilgilerin geçerliliğini
                           sağlamak için bu Sözleşmeler uyarınca, herhangi bir üçüncü şahsa bilgileri
                           göndermek; örneğin üçüncü tarafların veri tabanlarına karşı bir kredi
                           raporu ve / veya benzer belge talebinde bulunarak bilgilerinizi doğrulamak
                           için bizi yetkilendiriyorsunuz. Ve / veya üçüncü şahıs veritabanlarına
                           karşı bilgiyi doğrular. Buna ek olarak, bu Güvenlik İncelemelerini
                           kolaylaştırmak için, bizlere, sınırsız takdirde talep ettiğimiz an bilgi
                           veya belgeler sunmayı kabul etmektesiniz. Zaman zaman herhangi bir İnceleme
                           işlemi yaptığımız esnada, hesabınızdan para çekme ve / veya Perabet
                           Hizmetlerinin tamamına veya belirli bölümlerine erişiminizi
                           kısıtlayabiliriz. Düzenlemeler, güvenlik veya diğer iş nedenlerinden dolayı
                           İnceleme işlemlerini zaman zaman tekrarlayabileceğimizi lütfen unutmayın.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.4 Kimliğiniz hakkında yanlış veya yanıltıcı bilgi vermek Kara Para
                           Aklamayla Mücadele ve Terörizm Finansmanının Önlenmesiyle ilgili 2006 Kanun
                           uyarınca suçtur. Sonuç olarak, özel durumlarda, ilk verilen belgelerin
                           yetersiz olduğu, sahte olduğu, İnternet üzerinden yasa dışı işlemler yapmak
                           için üçüncü taraflardan alındığı düşünüldüğü durumlarda, verilen bilgilerin
                           sadece ülkenin yerel dilinde (İngilizce hariç) olduğu durumlarda, hukuki
                           belgelerin resmi çevirilerini talep etmek de dahil ancak bunlarla sınırlı
                           olmamak üzere, sizinle iletişime geçerek sizden daha fazla bilgi talep
                           edebilir veya bilgiyi uluslararası kabul görmüş biçimde sunmanızı,
                           isteyebiliriz. İncelemeyi geçememeniz durumunda, hesabınızın kalıcı olarak
                           kapatılmasına ve hesabın ödenmemiş bakiyesinin askıya alınmasına neden
                           olabilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.5 Müşteriler, belge sunmayı reddederse, hiçbir belge sunmazsa veya
                           kriterlere uymayan (sahte, değiştirilmiş, güvenlik kontrolleri başarısız
                           gibi) belgeler sunarlarsa Perabet bu gibi durumlarda oyuncuların
                           hesaplarını derhal kapatma ve hesap bakiyelerini iptal etme hakkını saklı
                           tutar. Böyle durumlarda, müşteriler tüm kazançlara ilişkin haklarını
                           kaybedecekleri gibi bilmelidirler ki depozitoları da geri ödenmeyebilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.6 Doğrulama İncelemeleri kapsamında, yaşınızı, kimliğinizi, adresinizi ve
                           ödeme ayrıntılarınızı doğrulamak için üçüncü taraf kuruluşlardan
                           faydalanabiliriz. Bu süreç, açıklanan ayrıntıları belirli (kamu veya özel)
                           veritabanlarına karşı kontrol etmeyi içerir. Bu sürece girerek, kişisel
                           bilgilerinizi kullanabileceğimizi, kaydettiğimizi ve ifşa edebileceğimizi
                           kabul etmiş oluyorsunuz ve bu veriler bizim veya onlar tarafından
                           kaydedilmiş olabilir. Güvenliğiniz için, bizimle yaptığınız tüm telefon
                           görüşmeleri kaydedilebilir ve denetlenebilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.7 Perabet, sitenin Servislerini web tabanlı versiyonu da dahil olmak
                           ancak bununla sınırlı olmamak üzere kullanmanızla bağlantılı olarak birden
                           (1) fazla hesaba kaydolmanıza izin vermemektedir. Birden fazla hesaba
                           kaydolur veya oluşturursanız, Perabet tarafınızdan tutulan herhangi bir
                           veya tüm hesapları feshetme hakkını saklı tutar. Perabet, tek bir hesap
                           sahibine ödenebilecek azami tutarı bağlı hesaplara yaymak yoluyla aşmayı
                           amaladığınızı ve bunu:
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           i. birden fazla hesaba kaydolarak ve / veya kullanarak; ve / veya
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           ii. bir veya birden fazla şahısla iş birliği yaparak farklı miktarda
                           Perabet hesapları kullanarak (farklı bahislerle oynanıp oynatılmadığına,
                           farklı fiyat aralıklarına ya da farklı günlerde olmasına bakılmaksızın,)
                           aynı maç / oyun kombinleri oynandığına inanırsak, şahsi karar verme
                           yetkimizi de kullanarak bu davranıştan kaynaklanan kazançları durdurma
                           hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           3.8 Perabet, birden çok hesapla ilgili olarak hileli faaliyet yoluyla
                           yaratılan para veya kazançlara el koyma hakkını saklı tutar. Şirketi
                           dolandırmak amacıyla makul gerekçelere dayanarak birden fazla hesap
                           açıldığına inanırsak eğer, söz konusu dolandırıcılık girişimleriyle ilgili
                           herhangi bir işlemi iptal etme hakkını saklı tutuyoruz. Aynı kişisel
                           bilgilere, banka hesabına, IP adresine ancak bunlarla sınırlı olmayan her
                           türlü hesaplar "Kopyalanmış Hesaplar" olarak kabul edilecektir. Kopyalanmış
                           Hesaplar bizim tarafımızdan derhal kapatılabilir; hesap bakiyeleri sahibi
                           tarafından feshedilmiş sayılacaktır. Böyle bir durumda yatırımlar Perabet
                           tarafından incelenmeye tabi olacaktır. Belgelerin sahte oluşu veya
                           doladırıcılık faaliyetlerinden dolayı şirketin herhangi bir kayıp yaşaması
                           durumunda, zararın eşit tutarı kadar oyuncunun hesabındaki yatırımdan
                           çekilecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4. PERABET HİZMETLERİNDEN YARARLANABİLMEK LE İLGİLİ KULLANIM KOŞULLARI
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.1 Bahislerinizle para kaybedebileceğinizi ve böyle bir kayıptan tamamen
                           siz sorumlu olduğunuzu kabul edersiniz. Hiçbir koşul altında sizin
                           tarafınızdan herhangi bir bahisle kaybedilen miktarların bizden geri
                           alınamayacağını kabul edersiniz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.2 Bulunduğunuz konut veya ikamet yerinizin ve / veya bulunduğunuz
                           bölgenin bahis oynamaya izinli olduğunu doğrulamak sizin
                           sorumluluğunuzdadır ve bizimle bahis oynamanızı yasaklayan bir yargı
                           bölgesinde bulunduğunuzda bizimle bahse girmeyeceğinizi kabul etmektesiniz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.3 Hizmetlerimizi sadece meşru bahis amaçlı kullanmayı taahhüt edersiniz.
                           Özellikle,
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           i. ticari faaliyetlerimizde herhangi bir hasara yol açmayı ya da sebebiyet
                           vermeyi ya da engelleme faaliyettinde bulunmayı amaçlayan veya bizim
                           üzerinde herhangi bir vergi, haciz veya harç toplama yetkisi de dahil olmak
                           üzere ancak bunlarla sınırlı olmayan bir yükümlülük yaratma amacıyla
                           faaliyette bulunmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           ii. bahis yapmanın yasak olduğu bölgelerden herhangi bir spor veya yarış
                           için bahis veya bahislerin oynanmasını destekleyen bilgi aktarımı yapmamayı
                           ve/veya;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           iii. doğrudan veya dolaylı olarak, üçüncü bir tarafın yasadışı olan
                           herhangi bir bölgedeki bir spor veya yarışma için bahis veya bahislerin
                           oynanmasını destekleyen bilgi aktarımı yapmasını sağlayacak düzenleme
                           yapmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           iv. siteye girmek için kullandığınız bilgisayarın IP adresini herhangi bir
                           şekilde saklamaya çalışmak veya siteye girerken kullandığınız bilgisayarın
                           gerçek IP adresini doğru bir şekilde tespit etmemize engel olmak için
                           girişimde bulunmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           v. kendi kişisel bilgileriniz dışında başka bilgi kullanarak bir bahis
                           hesabına kaydolmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           vi. üçüncü bir şahıs adına hareket etmemeyi;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           vii. yasadışı işlemlerden elde edilen para yatırmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           viii. müşterinin kullanması için yetkilendirilmemiş bir kredi kartı
                           kullanarak para yatırmamayı; para kazanmak planıyla üçüncü tarafla birlikte
                           bu tür bir kredi kartını kullanarak sahtecilik yapmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           ix. kişisel veya üçüncü taraf hesaplarını kullanarak kara para aklama veya
                           diğer yasadışı faaliyetlerde bulunmamayı;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           x. tranfer hesabını başkalarına satmamayı taahhüt edersiniz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.4 Mevcut para aklamayla mücadele kurallarının uyarınca, oyuncu yalnızca
                           Perabet hesabına Servislerimizi kullanmak ve bahis oyunu oynamak için para
                           yatırabilir. Aynı şekilde, oyuncu Perabet hesabına yatırılan paraları
                           değil, sadece kazançları çekebilir. Oyun etkinlikleri olmadan para yatıran
                           veya çeken oyuncuların ileriki bir duyuruya kadar fonlarını bloke
                           edilecektir. Perabet bir finansal kuruluşu değildir ve mevduata faiz
                           vermez. Her halukarda, Perabet, belirli ülkelerdeki ödeme yöntemlerine ve /
                           veya belirli oyunculara kısıtlamalar uygulamak için sınırsız hakkı saklı
                           tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.5 Kara para aklama faaliyetlerini önlemek için makul tüm önlemleri
                           alacağız ve Perabet bunun gerçekleşmediğinden emin olmak için uluslararası
                           denetimlere bağlıdır. Kara para aklamanın ve terörizmin finansmanının
                           risklerini belirlemek için küresel kara para aklama prosedürleri ve
                           parametreleri yürürlüktedir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.6 Perabet Hüküm ve Koşullarına ve müşterilerin risk profiline uygun
                           olarak müşteri hareketlerinin meşruiyetini değerlendirmek için müiterinin
                           finansal alışkanlıklarını ve davranışlarını incelemek amacıyla her hesaba
                           yönelik gerekli adımlar atılacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           4.7 Perabet Hizmetleri, tüm kullanıcıların yalnızca eğlence amacıyla
                           kullanılması içindir. Perabet eğer eğlence amaçı dışında herhangi bir amaç
                           için kullanıldığından şüphelenirse, hesap, risk yönetimi protokolleri
                           uyarınca Perabet ticari kararına göre sınırlandırılabilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5. KULLANICI ADI, ŞİFRE, (PERABET'NİN) KİŞİSEL HESAP BİLGİLERİ İLE İLGİLİ
                           İFŞA
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5.1 Müşteriler en az 6 karakterli sayı ve harf içeren bir parola
                           oluşturmaları önerilir. Müşteriler, kullanıcı adlarına veya diğer yaygın
                           bilgilere benzer bir şifre seçmekten kaçınmalıdır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5.2 Üyelik kaydı esnasında tarafınızdan seçilen kişisel hesabınızın
                           kullanıcı adı, şifre ve diğer kayıtlı bilgileriniz herhangi bir üçüncü
                           kişiye açıklanmamalıdır. Üçüncü bir tarafın Perabet dışında herhangi bir
                           yolla Perabet kişisel hesabınıza erişmesi halinde, paranızın durumundan ve
                           hesabınızda saklanan herhangi bir kişisel bilgiden yalnızca siz
                           sorumlusunuz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5.3 Kullanıcı adınızı, şifrenizi ve diğer kişisel bilgilerinizi güvenli ve
                           gizli tutmayı ve herhangi bir üçüncü şahsın kullanımına izin vermemeyi
                           kabul edersiniz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5.4 Kullanıcı adlarının ve güvenlik ayrıntılarının güvenli bir şekilde
                           muhafaza edilmesini sağlamak, müşterilerin kendi sorumluluğudur.
                           Şüphelenilen bir ihlal varsa müşteriler önceki güvenlik bilgilerini iptal
                           edip yeni giriş bilgileri talep etmeleri için gerekli güvenlik tedbirleri
                           almaları gerekir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           5.5 Müşteriler, Perabet ile oturum açarken veya iletişim kurarken doğru
                           kullanıcı bilgileri sağlamaları gerekmektedir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6. ÖDEMELER
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.1 Perabet hesabına cep telefonu numarasıyla para aktararak para yatırmak
                           mümkündür. Yeni ödeme yöntemleri eklendikçe bildirimleri ana sayfamızda
                           yapılacak ve e-postayla gönderilecektir. Her yeni yatırma yöntemi için
                           Hükümler ve Koşullar buna göre güncellenecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.2 Cepbank işlemleri, hesaptan kayıtlı cep telefonu numarasına
                           gönderilerek yapılır. Bu, para göndermenin hızlı ve güvenli bir yoludur ve
                           mevduat sayfasında bulunan sizin belirlediğiniz banka aracılığıyla
                           yapılabilir. Bu işlem hakkında ayrıntılı bilgi, seçilen bankanızın ilgili
                           mevduat sayfasında bulunur.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.3 Para yatırma talebi yapıldıktan ve form tamamen doldurulduktan sonra,
                           paranın Perabet hesaplarına ulaşması 15 dakika ila 2 saat alır. Bu süreyi
                           aşan herhangi bir gecikme Perabet müşteri desteğine bildirilmelidir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.4 Oyuncuların sadece kişisel bilgilerini ve kişisel banka hesaplarını
                           kullanmalarna izin verilir. Oyuncular para yatırma formundaki bilgilerin
                           doğru olduğundan emin olmakla yükümlüdürler.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.5 Para yatırma formunda sağlanan oyuncu bilgileri, Perabet tarafından
                           muhafaza edilen oyuncu verileriyle tamamen aynı olmalıdır. Bir hesaptan
                           para çekme işlemleri ancak hesaba kayıtlı olan kişiye hitaben yapılabilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.6 Oyuncular Perabet’in para çekme sayfasında bulunan listelenen
                           bankalardan herhangi birinden para çekme talebinde bulunabilirler. Zaman
                           içerisinde Bankaların sayısı artacak ve para çekme yöntemleri eklenecektir.
                           Yeni eklemeler ana sayfamıza dahil olacak ve eklendikçe gerekli bildirimler
                           e-posta yoluyla gönderilecek. Buna bağlı olarak para çekme Hüküm ve
                           Koşulları da güncellenecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.7 Para çekme talebinizde herhangi bir tutarsızlık olmadığı takdirde, para
                           çekme talebiniz 24 saat içinde işleme koyulacaktır. Zaman çerçevesi garanti
                           edilmez ve zaman zaman (hesap ve bilgi doğrulama, resmi tatiller, banka
                           çalışma saatleri gibi sebeplerden dolayı) gecikmeler olabilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.8 Para çekme talimatı verdiğiniz an itibarıyle hesabınıza borç
                           geçirilecektir. Para çekme talepleri her gün yapılabilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.9 Para çekme talebinizle ilgili bir sorun oluşursa, işlem iptal edilir ve
                           para hesabınıza geri yüklenir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.10 Hesabınızda bir bonus miktarı varsa, para çekme talebinde bulunmadan
                           önce bonusun devredilme koşullarını yerine getirmeniz gerekir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.11 Oyuncular, ilk para yatırma miktarlarını tam olarak kullandıktan sonra
                           para çekme talebinde bulunabilirler.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           6.12 Oyuncu para çekme formunda sağladığı bilgileri ile Perabet tarafından
                           tutulan oyuncunun verileri tamamen aynı olmalıdır. Diğer taraflara yapılan
                           para çekme talepleri dikkate alınmayacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           7. ELEKTRONİK HİZMET SAĞLAYICISI
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           7.1 Perabet Hizmetlerini kullanabilmek için, bize para göndermeniz ve
                           bizden para almanız gerekebilir. Bu gibi finansal işlemleri
                           gerçekleştirebilmek için üçüncü taraf elektronik ödeme işlemcilerini ve /
                           veya finansal kurumları ('ESP'leri) kullanabiliriz. Bu tür ESP'lere mevduat
                           hesabınıza para yatırıma veya para çekme için işlem yapabilme talimatı
                           verebilmemiz için gerektikçe bize gayrikabil-i rücu izin veriyorsunuz ve
                           platformlarımızdaki ilgili özellikleri kullanarak sunduğunuz talebiniz
                           doğrultusunda gayrikabil-i rücu olarak sizin adınıza talimat verme izni
                           veriyorsunuz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           7.2 İlgili tüm ESP’lerin öngördüğü düzenlemelere uymayı kabul ediyorsunuz.
                           Bu Anlaşmalar ve ESP düzenlemeleri arasında uyumsuzluk ve / veya
                           anlaşmazlık olması durumunda, bu Anlaşmalar hüküm sürdürecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8. KAZANANLAR
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.1 Bahis bürosu hesaplamaları ilk sonuçlara göre netleştirir. Sonraki
                           diskalifiyeler ve iptaller hesaplamaları etkilemez.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.2 Kazançlar tespit edilen oranlarla çarpılır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.3 Bahisler tamamlandıktan sonra kazanan oyuncuların hesaplarına kazanılan
                           miktarlar aktarılır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.4 Müşteriler, hatalı işlemler sonucunda hesaplarına ek para yatırımı
                           yapılmışsa bu bilgiyi Şirkete haber vermekle yükümlüdürler. Aksi takdirde,
                           bu işlemle ilişkili olan kazançların tamamı iptal edilerek kazanım miktarı
                           Perabet şirketinin hesabına çevrilecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.5 hesabının daha önce kapatılmış bir bahis tekrar hesaplandıktan sonra
                           Kullanıcının hesabı sıfır bakiyesinin altına düşmesi durumunda, oyuncu
                           hesap bakiyesini sıfıra veya üstüne getirmek için yatırım yapmalıdır. Bu
                           gerçekleşinceye kadar şirket hesapları engeller.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.6 Müşterinin para çekme işlemi için kullanacağı hesap müşterinin kendi
                           adına olmalıdır. Aksi halde para çekme talimatları dikkate alınmayacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           8.7 Oyuncu, para yatırmak için kullanılan ödeme yöntemine iptal veya geri
                           ödeme talebinde bulunmayacağını beyan ve kabul eder. Para yatırma işleminin
                           kullanıcıya geri ödenmesi veya iade edilmesi durumunda şirket, uygun
                           olmayan yatırımlarda kullanılan hesaplardan giderler de dahil olmak üzere
                           tam ödeme almak için harekete geçecektir. Hesabın, oyuncu hesabına bahis
                           faaliyetleri dışındaki herhangi bir uygunsuz işlem için aktarıldığı tespit
                           edilmesi durumunda, şirket (hesabın geçici olarak askıya alınop almadığına
                           bakılmaksızın) masraflar için müşteriden ek ücret talep edebilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9. CANLI BAHİS
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9.1 Canlı bir etkinlikte sergilenen istatistikler (Skor, saat vb. gibi)
                           yalnızca genel bilgi içindir. Doğruluk garantisi yoktur ve bahis oynarken
                           dikkate alınmamalıdırlar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9.2 Paraları yatırılan bahisler bekleme modunda tutulacak ve sonra kabul
                           edilecek veya iptal edilecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9.3 Bahisler bekleme modundayken piyasada önemli bir değişiklik meydana
                           gelmişse iptal edileceklerdir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9.4 Şirket, önceden bildirimde bulunmaksızın herhangi bir piyasaya yapılan
                           bahisleri askıya alma hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           9.5 Şirket, bahislerin sonuçlar yayınlandıktan sonra yapıldığına dair makul
                           bir şüphesi olduğuna inanırsa veya teknik arıza sırasında yanlış oranla
                           yapılan bahis oyuncuya haksız avantaj elde etmesine neden olmuşsa şirket,
                           bu şartlar altında bahisleri iptal etme hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           10. GİZLİLİK
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           10.1 Yasal olarak, Perabet Web sitesini kullanımınız sırasında sizden
                           toplanan kişisel bilgilerinizin ne şekilde kullandığımızı belirleyen veri
                           koruma koşullarına uymamız gerekmektedir. Dolayısıyla, kişisel
                           bilgilerinizi kullanma biçimimizle ilgili yükümlülüklerimizi çok ciddiye
                           alıyoruz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           10.2 Bize bilgi vererek, Kişisel Bilgilerinizi Şartlar'da belirtilen
                           amaçlar doğrultusunda işleme koymamız için, Perabet Web sitesini
                           çalıştırmak veya yasal ya da düzenleyici yükümlülüklere uymak için izin
                           vermiş olursunuz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           10.3 Şirket politikası gereği, hiçbir kişisel bilginin, bu bilgiye erişim
                           ihtiyacı olan hizmet sunmakla yükümlü olanlar dışında herhangi üçüncü
                           tarafla paylaşılamaz.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           10.4 Sizden aldığımız bilgilerin doğru kayıtlarını tutmak için bize
                           gönderdiğiniz herhangi bir iletişim kopyasını (herhangi bir e-postanın
                           kopyaları da dahil olmak üzere) alacağız.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           11. PERABET TANITIMLARI VE TALEP EDİLMEMİŞ E-POSTA POLİTİKASI
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           11.1 Bir oyuncu e-posta adresini Perabet’ye emanet ederse aksini
                           belirtilmedikçe, Perabet’in oyuncunun merak ve ilgisini çekebileceğini
                           düşündüğü ürün, hizmet ve özel teklif bildirimlerini e-posta yolu ile
                           almayı açıkça kabul eder. Bu tür abonelik, herhangi bir zamanda oyuncu
                           tarafından iptal edilebilir. Oyuncu e-posta adresine gelen ürün
                           bildirimlerini iptal etmek istiyorsa, Perabet’in iletişim e-posta adresine
                           gönderilen bir e-postanın referans satırındaki "UNSUBSCRIBE" sözcüğüyle
                           birlikte gönderilmesinden üç gün içinde posta listesinden silinir. .
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           11.2 Tüm bonus ve promosyon teklifleri, iletilirken mevcut olan şartlara ve
                           koşullara tabidir. Prensip olarak, tüm bonuslar ve teklifler yalnızca
                           promosyonel bildiriminin alıcısına yöneliktir ve öngörülen bir zaman dilimi
                           içerisinde yalnızca bir kez kullanılabilir. Promosyon teklifleri paraya
                           çevrilemez, ancak belirli bonus koşullarına tabi kalmaya devam eder.
                           Perabet, dolandırıcılık ve hile yoluyla bonus ve promosyon ve bonuslardan
                           elde edilen tüm kazanımları sınırsız olarak oyuncudan geri alma hakkını
                           saklı tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           11.3 Birkaç kez kayıt yapıp, sahte hesap açan veya bonus tekliflerinden
                           haksız avantaj elde etmek için front men kullanan birlikte hareket eden
                           oyuncu grupları, veya ortaklık kurmuş ya da bireysel oyuncu olarak hareket
                           edenlerin tespit edilmeleri halinde Perabet bonus tutarlarına, bu bonus
                           teklifleriyle yapılan kazanımları iptal etme ve hesapları kapatma hakkını
                           saklı tutar. Eğlence amaçlı olmayan oyuncular ve bonus promosyonlarını
                           kötüye kullanmaya çalışanlar promosyonlardan sınırlandırılır. Perabet,
                           herhangi bir bonus teklifini herhangi bir zamanda feshetme veya değiştirme
                           hakkını saklı tutar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           12. DOLANDIRICILIK FAALİYETLERİ, YASAKLANMIŞ İŞLEMLER VE PARA YATIRMA
                           TEYİTLERİ
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           12.1 Uygunsuz oyun oynamaya ve dolandırıcılık faaliyetlerine karşı sıfır
                           tolerans politikamız vardır. Bu faaliyetler arasında oyunu manipüle etme
                           veya ödemede hile yapma, veya çoklu döviz hizmetlerini manipüle etme dahil
                           ancak bunlarla sınırlı olmayan, çalıntı kredi kartlarının kullanımı veya
                           diğer dolandırıcılık faaliyetleri (örneğin, ödeme iadesi veya ödeme iptali)
                           veya yasaklanmış işlem (örn. para aklama) ya da banka veya ESP'nin
                           işlemlerinizi yürütmemesi dahil ancak bunlarla sınırlı olmayan
                           faaliyetlerdir. Bu tür sahtekarlık faaliyetleri hesabın kapatılmasına neden
                           olacaktır. Bu faaliyetlerden doğan herhangi bir kazanç iptal edilecek ve
                           yatırılan tutar Perabet tarafından incelenecek ve hesap sahibine iade
                           edilemeyecektir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           12.2 Tamamen kendi takdirimize bağlı olarak, bizi ve / veya Grubu veya
                           Perabet Hizmetlerini kullanan herhangi bir başka üyeyi aldatığınız veya
                           kandırmaya kalkıştığınız tespit edilirse, hesabınızı askıya alma ve / veya
                           kapatma hakkını saklı tutar ve uğranılan zararı geri almak için yasal olan
                           aşağıdakiler dahil herhangi bir yöntemi kullanarak ancak bunlarla sınırlı
                           olmayan:
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           i. tarafınızdan ödenecek tutarı hesabınızdan çekme;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           ii. üçüncü parti tahsilat kurumlarına borçun tahsilatı için talimat verme.
                           Bu kredi derecelendirmenizi olumsuz yönde etkileyebilir ve kişisel
                           bilgilerinizi (kimliğiniz dahil) uygun ajanslarla paylaşmamızı
                           gerektirebilir.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           13. HAKKIN YİTİRİLMESİ VE HESAP KAPANIŞI
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           13.1 Eğer:
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           i. bu Anlaşmalardan herhangi birini ihlal ettiyseniz;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           ii. sahtekarlık, gizli anlaşma (ödeme iadesi ile ilgili olanlar da dahil
                           olmak üzere) veya yasadışı ya da uygunsuz (çoklu para birimini tesislerinin
                           herhangi bir manipülasyonu dahil ancak bununla sınırlı olmayan)
                           faaliyetlerde bulunmak amacıyla Hizmetleri kullandığınız veya bunları
                           kullanmaya çalıştığınızı fark edersek;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           iii. diğer çevrimiçi oyun sitelerinde veya hizmetlerde oynadığınızı ve
                           sahtekarlık, gizli paylaşım (ödeme iadesi ile ilgili olanlar da dahil olmak
                           üzere) veya yasadışı ya da uygunsuz faaliyetlerde bulunduğunuzu fark
                           edersek;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           iv. hesabınızla yaptığınız tüm satın alma işlemleri veya para
                           yatırımlarınız için ‘ödeme iadesi' talebinde bulunduysanız veya satın alma
                           işlemlerini reddettiyseniz;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           v. iflas ederseniz veya dünyanın herhangi bir yerinde buna eşdeğer işlemler
                           gerçekleşirse;
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           vi. ilgili mahkemeler tarafından uluslararası veya yerel para aklama
                           kurallarını ihlal ettiğiniz kanıtlanmış ve yasalar göre karara bağlanmışsa:
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           Tamamen kendi sınırsız takdirimize bağlı olarak, hesabınızla ilgili, veya
                           herhangi bir ESP hesabınızla ilgili (bu terimin madde 7.1 ve 7.2'de
                           tanımlandığı gibi), diğer sitelere ve / veya kumarhaneler ve / veya bize
                           ait veya adımıza işletilen hizmetleri ve oyun hizmetlerini kullanmanız
                           durumunda veya ortak oyun/masa platformuna sahip herhangi hizmet ile ilgili
                           anlaşmaları feshetmek hesap bakiyenizi tevkif etmek, hesabınızı askıya
                           almak ve bu gibi durumlardan kurtulmak için etkilenen ödemelerin,
                           bonusların ve kazançların tutarını bu hesaplardan geri alma hakkımızı saklı
                           tutarız.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           14. TÜM ANLAŞMA, DEĞİŞTİRME VE DEĞİŞİKLİKLER
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           14.1 Tarafımızdan değiştirilen ve / veya değişiklik yapılan bu Anlaşmaları
                           tam olarak anlıyor ve onlara bağlı kalmayı kabul ediyorsunuz. Bu
                           Anlaşmaları, yeni şartları önceden bildirmeksizin istediğimiz zaman
                           değiştirebiliriz, ancak tüm yeni Hükümler ve Koşullar, Perabet’in ilgili
                           sayfasında veya siteye eriştiğiniz herhangi bir konumda yayınlanacak ve /
                           veya değiştirilecektir. Yapılan tüm değişiklikler, yayınlandıktan on beş
                           (15) gün içerisinde yürürlüğe girer. Herhangi bir değişiklik sizin için
                           kabul edilemez ise, Hesabınızı kapatarak Perabet ile ilgili Anlaşmanızı
                           feshedebilirsiniz. Perabet ile sizin aranızdaki Hükümler ve Koşulların veya
                           Anlaşmaların değiştirilmesinden sonra ve / veya değişilliklerin yürürlüğe
                           girdikten sonra, Hizmetler'i kullanmaya devam etmeniz halinde
                           değişikliklerin sizin tarafınızdan kabul edildiği yönünde anlaşılacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           14.2 Hizmetler'e her eriştiğinizde, bu Anlaşmaları ve değişiklikleri gözden
                           geçirmek tamamen kendi sorumluluğunuzdadır. Değiştirilen herhangi bir
                           Anlaşma (ve burada adı geçen belgeler), Siz ve Bizim aramızdaki tam ve
                           nihayi Anlaşmayı temsil eder ve Siz ve Bizim aramızdaki tüm önceki
                           Anlaşmaları geçersiz kılar.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           15. MUHTELİF
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           15.1 Perabet Hizmetlerinin bu Hükümler ve Koşulları ile Perabet
                           Hizmetlerinde bahsedilen oyun kuralları veya diğer belgeler arasında
                           çelişki olması durumunda, Perabet Hizmetlerinin bu Hüküm ve Koşulları
                           geçerli olacaktır.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           15.2 BU ANLAŞMALAR BAŞKA BİR DİLE TERCÜME EDİLDİYSE, ÇEVİRİ DİLİ VE
                           İNGİLİZCE DİLİ VERSİYONU ARASINDA HERHANGİ BİR ÇATIŞMADA DURUMUNDA
                           İNGİLİZCE VERSİYONU GEÇERLİ OLACAKTIR.
                           </span>
                        </div>
                        <div style="font-size: 10pt;"><span style="color: rgb(255, 255, 255);">
                           15.3 LÜTFEN BU HÜKÜM VE KOŞULLARI ÇIKTI ALARAK BAŞVURABİLECEĞİNİZ BİLGİLER
                           OLARAK SAKLAYINIZ. AYRICA, AKTİVİTELERİNİZE UYGUN OLARAK TÜM İŞLEM
                           MAKBUZLARINIZI VE OYUN KURALLARINI DA ÇIKTI ALARAK SAKLAMANIZI ÖNERİRİZ.
                           </span>
                        </div>
                     </div>
                     <div></div>
                     <div></div>
                     <!----><!---->
                  </app-static-inner-content>
               </div>
            </div>
            <div id="checkOurTermsAndConditionsModal" materialize="modal" class="modal pad-10" style="z-index: 1051;">
               <div class="modal-close-button right"><a><i class="fa fa-times"></i></a></div>
               <div class="mdl-hdr">
                  <div class="header-content">
                     <h3> Dikkat </h3>
                  </div>
               </div>
               <div class="modal-content"><span></span></div>
               <a class="btn primary-color right">Kapat</a>
            </div>
            <div id="privacyPolicyModal" materialize="modal" class="modal" style="z-index: 1053;">
               <div class="mdl-hdr">
                  <div class="header-content">
                     <div class="modal-close-button"><a><i class="fa fa-times"></i></a></div>
                  </div>
               </div>
               <div class="modal-content">
                  <app-static-inner-content contentcode="about-us-privacy-policy">
                     <div extroutelink="" id="about-us-privacy-policy">
                        <div><span style="color: rgb(255, 255, 255);">
                           GİZLİLİK POLİTİKASI
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Perabet, bu Gizlilik Politikasını online sitelerimizde hizmetlerimizi
                           (toplu olarak 'Hizmet') kullandığınızda hangi bilgileri topladığımızı, bu
                           bilgileri neden topladığımızı ve toplanan bilgiyi nasıl kullandığımızı
                           bildirmek için oluşturmuştur.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Zaman zaman bu Gizlilik Politikasın’da değişiklikler yapabiliriz. Bu
                           durumda sizleri değiştirilen şartlarla ilgili online sitelerimizde
                           bilgilendireceğiz. Bu Gizlilik Politikasını düzenli olarak tekrar ziyaret
                           etmenizi öneririz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           1. Toplanan Bilgiler
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bizler bir şahsı tanımlamak için kullanılabilecek ad, soyad, doğum tarihi,
                           kredi kartı bilgileri, ev veya diğer fiziksel adresleri, e-posta
                           adreslerini, telefon numaralarını ve diğer iletişim bilgilerini içeren
                           ancak bunlarla sınırlı olmayan bilgileri "Kişisel Bilgiler" olarak
                           değerlendiririz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bir hesap açmak durumunda kayıt olurken veya Hizmetlerimizi kullanırken
                           Kişisel Bilgilerinizi vermeniz istenebilir. Topladığımız Kişisel Bilgiler,
                           iletişim bilgileri (telefon numarası dahil), nakliye bilgileri, fatura
                           bilgileri, işlem geçmişi, web sitesi kullanım tercihleri, ve Hizmetle
                           ilgili geribildirim gibi bilgileri içerebilir.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Ayrıca, Hizmetle etkileşimde bulunulduğunda, sunucularımız Kaynak IP
                           adresi, erişim zamanı, erişim tarihi, ziyaret edilen web sayfaları,
                           kullanılan dil, yazılım arızalanma raporları ve kullanılan tarayıcı türü
                           gibi bir takım idari ve trafik bilgilerini içeren size özel faaliyet kaydı
                           tutar:
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmetin sağlanması ve kalitesi için bu bilgi önemlidir. Sizin bilginiz
                           olmadan Hizmet üzerinden Kişisel Bilgilerinizi toplamayız.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           2. Veri Toplama ve İşleme Verme Yöntemleri
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Kişisel Bilgileriniz bize, sizi Perabet sitesine yönlendiren çevrimiçi
                           tedarikçilerden ve hizmet sağlayıcılardan gelebilir ayrıca üçüncü taraf
                           tedarikçilerden yasal olarak edinilen müşteri listelerinden edinilebilir.
                           Buna ek olarak, teknik destek sağlamak, çevrimiçi işlemlerinizi yürütmek ve
                           çevrimiçi hesabınızı korumak için üçüncü taraf hizmet sağlayıcılarının
                           hizmetlerinden yararlanabiliriz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bu tür tedarikçilere, servis sağlayıcılara ve üçüncü taraf e-ticaret
                           hizmetlerine verdiğiniz tüm bilgilere erişeceğiz ve Kişisel Bilgileri
                           aşağıdaki bölüm 3'te belirtildiği gibi kullanacağız. Bu bilgi, sadece kendi
                           personelimize ve işlemlerinizin tamamlanmasını sağlayacak olan 3. taraflara
                           veya aşağıda 3. bölümde belirtildiği şekilde sizin Hizmet kullanımınızı
                           desteklemek amacıyla ifşa edilebilir. 3. taraf hizmet sağlayıcılar ve
                           çevrimiçi tedarikçiler ile yaptığımız düzenlemelerde sizin gizliliğinizin
                           korumasını sağlamak için önlemler alıyoruz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           3. Bilgi Kullanımı
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Sizden topladığımız Kişisel Bilgileri, Hizmetimizi sunmak, müşteri desteği
                           vermek, gerekli güvenlik ve doğrulama kontrollerini yapmak, çevrimiçi
                           işlemlerinizi yürütmek, belirli iş gereksinimlerini karşılamak ve Hizmetin
                           işleyişi ile bağlantılı olan her türlü amaç için kullanırız.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmeti sağlamak, Perabet ürün ve hizmetleri ile ilgili promosyon teklif ve
                           bilgileri size sunabilmek ve Perabet’in ürün ve servis çeşitlerini ve
                           Müşteri Hizmetini daha iyi sunabilmek amacıyla, Kişisel Bilgileriniz bağlı
                           şirketlerimiz, yan kuruluşlarımız, acentelerimiz ve tedarikçilerimizle
                           paylaşılabilir.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Zaman zaman, anketler veya yarışmalar yoluyla sizden bilgi isteyebiliriz.
                           Bu anket veya yarışmalara katılım tamamen gönüllüdür ve bu nedenle, bu tür
                           bilgilerin ifşa edilip edilmemesi konusunda seçim yapma tercihiniz vardır.
                           Talep edilen bilgiler arasında isim, yazışma adresi ve telefon numarası
                           gibi iletişim bilgileri ve posta veya posta kodu ya da yaş gibi demografik
                           bilgiler olabilir.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bir ankete ya da yarışmaya katılmayı seçer ve yarışmayı kazanırsanız,
                           tarafımızdan verilen herhangi bir yarışma ödülünü ya da kazancını kabul
                           ederek, yasa ile yasaklanmış durumlar dışında, adınızın ve diğer
                           bilgilerinizin reklam ve tanıtım amaçlı ek tazminat olmaksızın
                           kullanılmasını kabul etmiş olursunuz. Promosyon bilgisi almama tercihi
                           yapmadığınız taktirde, size ait Kişisel Bilgilerinizi (e-posta adresiniz ve
                           telefon numaranız da dahil olmak üzere) kullanarak size diğer benzer
                           ürünlerimiz, hizmetlerimiz ve diğer oyun ürünlerimiz dahil promosyonlarımız
                           hakkında bilgi vermek için kullanabiliriz. İşbu Gizlilik Politikasında
                           belirtilenler haricinde, Kişisel Bilgilerinizi satmayacağız, kiraya
                           vermeyeceğiz veya paylaşmayacağız.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           4. Bilgilerin İfşa Edilme Durumları
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Yasalar gerektirdiği takdirdi Kişisel Bilgilerinizi açıklayabiliriz veya
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Perabet sitesine veya Hizmete gelen herhangi bir yasal
                           süreci yerine getirmek için
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Haklarımızı veya mülkiyetimizi koruyabilmek ve savunmak için
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hizmet kullanıcılarının veya kamuoyunun kişisel güvenliğini korumak için
                           samimiyetle gerekli olduğuna inanırsak Kişisel Bilgilerinizi
                           açıklayabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Eğer Perabet’ye veya Hizmetten yararlanan herhangi başka kullanıcıya karşı
                           hile yapma veya dolandırma teşebbüsünde olduğunuzu düşünürsek buna oyun
                           manipülasyonu, ödemede sahtekarlık dahil ancak bunlarla sınırlı olmayan
                           veya çalıntı kredi kart kullanarak sahtekarlıkla ödemeler yaptığınız
                           yönünde veya diğer hileli etkinlikler (buna herhangi bir para iadesi veya
                           ödemenin geri dönmesi dahil) veya yasaklanmış işlemler (kara para aklama da
                           dahil olmak üzere), yaptığınız yönünde tamammen kendi insiyatifimize bağlı
                           olarak sizden şüphelenirsek bu bilgileri (kimliğinizle birlikte) diğer
                           online oyun siteleriyle, bankalarla, kredi kartı şirketleriyle ve uygun
                           ajanslarla paylaşma hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           5. Erişim
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Perabet web sitesinde artık promosyon bildirilerini “almak istemiyorum”
                           tercihini yaparak veya bize ulaşın seçeneğinden e-posta adresine
                           gönderilebilecek bir e-posta ile ya da Müşteri Hizmetlerini arayarak
                           promosyon bildirileri almaktan vazgeçebilirsiniz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hakkınızda topladığımız Kişisel Bilgilerin doğruluğunu teyit etmek
                           istersiniz;
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Kişisel Bilgilerinizi güncellemek istersiniz;
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Kişisel Bilgilerinizin kullanımıyla ilgili herhangi bir şikâyet varsa
                           eğer Müşteri Hizmetlerini arayabilirsiniz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bize kanıt sağladığınız takdirde, ki bu gibi durumlarda haklı talep
                           sayılır, bize vermiş olduğunuz bilgileri isterseniz değiştirebilir ya da
                           gelecekteki kullanımını yasaklamak için önlem alabiliriz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           6. Çerezler
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezler, bilgisayarınıza veya ekipmanınıza yüklenmiş, bazı çevrimiçi
                           sayfaları ziyaret ettiğinizde tercihlerinizi kaydeden küçük metin
                           dosyalarıdır. Perabet web sitesinin kullanımını izlemek için çerezleri
                           kullanırız. Çerezleri siteye olan trafiği izlemek, Hizmeti iyileştirebilmek
                           ve kullanımınızi daha kolay ve / veya daha alakalı hale getirebilmek için
                           kullanabiliriz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Bu çerezler, kayıdınız esnasında sizden toplanan bilgileri muhafaza eder ve
                           sizi müşterimiz olarak görmemizi ve size gereken hizmetleri sunmamıza izin
                           verir. Bu verileri siz çevrimiçi durumdayken ilgi alanlarınızı daha iyi
                           anlamak için ve çevrimiçi sitelerimize yaptığınız ziyaretleri artırmak
                           amacıyla da kullanabiliriz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezler bize:
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Tercihlerinizi daha iyi anlayıp size daha alakalı promosyon teklifleri
                           sunmamızı
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Sizin isteğinize göre içerik veya işlevselliği değiştirirken
                           tercihlerinizi belirlememizi
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Web sitemizde belirli servislere erişirken kayıtlı bir kullanıcımız
                           olduğunuzu teyit etmemizi ve giriş bilgilerinizi kaydetmemizi
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           • Hizmetlerimizin kullanımına ilişkin istatistik toplayabilmemizi sağlar.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Posta araçlarımızın düzgün çalışıp çalışmadığından emin olmak için
                           çerezleri ve web işaretçileri de kullanabiliriz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezleri nasıl reddedebilir veya onlardan nasıl vazgeçebilirim?
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çerezleri kabul etme veya reddetme hakkınız var. Çoğu web tarayıcısı
                           çerezleri otomatik olarak kabul etse de, siz isterseniz çerezleri reddetmek
                           için tarayıcınızın ayarını değiştirerek çerezleri reddedebilirsiniz.
                           Çerezleri reddetmeyi seçerseniz, Perabet sitesinde yer alan tüm interaktif
                           özellikleri deneyimleyemeyebilirsiniz.
                           </span>
                        </div>
                        <div>
                           <span style="color: rgb(255, 255, 255);"><br>
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           7. Elektronik Servis Sağlayıcılarının Kullanımını Kabul Etmek
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmette gerçek para oyunları oynamak için, bize para gönderip bizden para
                           almanız gerekecektir. Bu tür finansal işlemleri yürürlüğe koymak için
                           üçüncü taraf elektronik ödeme işlemcilerini ve/veya finansal kurumları
                           ("ESP'ler") kullanabiliriz. Bu Gizlilik Politikasını kabul ederek,
                           işlemlerin işlenebilmesi için gerekli olan Kişisel Bilgilerinizi ESP'lerle
                           hatta gerektiğinde bu bilgilerin ülkenizin dışına aktarılarak
                           paylaşılmalarını kabul etmiş olursunuz. Gizliliğinizin korumasını sağlamak
                           için ESP'ler ile olan düzenlemelerimizde önlemler alıyoruz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           8. Güvenlik İncelemesinin Onayı
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Kullanım Hüküm ve Koşullarımızın ve ilgili yasanın olası ihlalini kontrol
                           etmek amacıyla kimliğinizi, yaşınızı ve tarafınızdan sağlanan kayıt
                           verilerinin geçerliliğini, Hizmet kullanımınızı ve finansal işlemlerinizi
                           doğrulamak için güvenlik incelemesi yapma hakkımızı saklı tutuyoruz. Bu
                           Gizlilik Politikası’nı kabul ederek, Hizmetin kullanımında bize verdiğiniz
                           bilgileri doğrulamak amacıyla, bize, personelimize, bağlı şirketlerimize,
                           yan kuruluşlarımıza, acentelere ve tedarikçilerimize Kişisel Bilgilerinizi
                           kullanma ve Kişisel Bilgilerinizi üçüncü kişilerle hatta gerektiğinde bu
                           bilgilerin ülkenizin dışına aktarılarak paylaşma yetkisini vermiş
                           olursunuz. Güvenlik incelemeleri, bir kredi raporu sipariş etmek ve/veya
                           sağladığınız bilgiyi 3. parti veritabanlarına karşı doğrulamak gibi ancak
                           bunlarla sınırlı olmayan hareketler içerebilir. Bu güvenlik incelemelerini
                           kolaylaştırmak için verdiğiniz onayın yanısıra talep edebileceğimiz bu tür
                           bilgi veya belgeleri sunmayı da kabul edersiniz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           9. Çocukların Korunması
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmet, 18 yaşın (veya kendi yetki alanlarındaki kanuni yaşın) altındaki
                           kişilere yönelik değildir veya onlar için tasarlanmamıştır. Hizmet'in
                           herhangi bir bölümünden bize bilgi veren herhangi bir kişinin, 18 yaşında
                           (veya kendi yetki alanlarındaki kanuni yaşta) veya üstü olduğunu kabul
                           ederiz. 18 yaş altı bir şahsın, çevrimiçi siteyle kişisel bilgi girişi yaptığı veya
                           girişi yapmaya çalıştığı fark edilirse bu bilgiyi kabul etmeyip bilgileri
                           kayıtlarımızdan kaldırmak için önlem alırız.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           10. Uluslararası Transferler
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmetle ilgili toplanan kişisel bilgiler, bizim veya bağlı
                           şirketlerimizin, tedarikçilerimizin, bağlı kuruluşlaımızın veya acentelerin
                           faaliyet gösterdiği herhangi bir ülkede işleme tabi tutulabilir. Hizmeti
                           kullanarak, bilgilerin ülkeniz dışına taşınmasına izin vermiş olursunuz.
                           Yine de, iştiraklerimiz, acentelerimiz, bağlı şirketlerimiz ve
                           tedarikçilerimizin bulundukları konuma rağmen gizlilik standartlarımıza
                           uymalarını sağlamak için önlem alıyoruz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           11. Üçüncü Taraf Uygulamaları
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Çevrim içi üçüncü tarafların işlem yaptığı sitelerin mal sahipleri bizden
                           bağımsız olarak sitelerini işlettikleri için, Perabet sitesinden veya
                           siteye bağlanan çevrim içi üçüncü taraflara verdiğiniz herhangi bilgi veya
                           görüntünün güvenliğini veya bağlı veya başka programları idare eden çevrim
                           içi üçüncü tarafların topladığı herhangi bilgiyi koruyabileceğimiz
                           garantisini veremeyiz. Üçüncü taraflarca toplanan bilgiler, bu Gizlilik
                           Politikası’na tabi değildir, ancak mevcut ise, üçüncü tarafların kendi
                           gizlilik politikaları tarafından yönetilir. Üçüncü tarafın bilgi
                           uygulamalarıyla ilgili sorularınız varsa, lütfen onlara ait gizlilik
                           politikalarını okuyun. Bu gibi üçüncü tarafların uygulamaları, eylemleri
                           veya politikaları için herhangi bir sorumluluk veya mesuliyet üstlenmiyoruz
                           ve bu çevrimiçi sitelerin içeriğinden veya gizlilik uygulamalarından
                           sorumlu değiliz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           12. Yasal Sorumluluk Reddi
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Hizmet, "OLDUĞU GİBİ" ve "MÜMKÜN OLDUĞU ZAMAN" herhangi bir yükümlülüğü
                           olmaksızın çalışır. Doğrudan kontrolümüzün dışında gerçekleşen olaylardan
                           sorumlu değiliz. Teknolojimizin ve işimizin karmaşıklığı ve sürekli değişen
                           doğası nedeniyle, Kişisel Bilgilerinizin mahremiyeti ile ilgili hatasız bir
                           performansın olacağını garanti etmiyoruz ve Kişisel Bilgilerin kullanımı
                           veya serbest bırakılması ile ilgili dolaylı, rastlantısal, başka sebepten
                           dolayı ortaya çıkan veya cezai tazminatlardan sorumlu değiliz.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           13. Birleşme
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           Şayet iflas başvurusunda bulunmamız veya üçüncü bir şahıs tarafından satın
                           alınmamız veya birleşmemiz ya da varlıklarımızın hepsini veya bir kısmını
                           üçüncü şahsa satmamız veya tüm önemli varlıklarımızı 3. şahıslara
                           devretmemiz durumunda, Hizmet yoluyla bize verdiğiniz Kişisel ve diğer tüm
                           bilgileri potansiyel ve sonradan ortaya çıkacak olan iş ve birleşme
                           ortaklarıyla paylaşma hakkımızı saklı tutarız.
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           14. Gizlilik Politikasına Onay Verme
                           </span>
                        </div>
                        <div><span style="color: rgb(255, 255, 255);">
                           İşbu Gizlilik Politikasının (geçerli olduğu haliyle) ilan edilmesine
                           müteakip Kayıt işlemi sırasında ve/veya Hizmet'i kullanmaya devam ettiğiniz
                           sürede [Gönder], [Kabul ediyorum] veya [Onaylıyorum] düğmesini tıklayarak,
                           bu Gizlilik Politikasını kabul etmiş olursunuz. Bu bizim tüm ve tek
                           Gizlilik Politikamız olup önceki herhangi bir versiyonu geçersiz kılar. Bu
                           Gizlilik Politikası, Hükümler ve Koşullarımızla ve çevrimiçi sitelerimize
                           gönderilen ek geçerli şartlara uygun olarak okunmalıdır. Periyodik olarak
                           bu Gizlilik Politikasında değişiklikler yapabiliriz bundan dolayı düzenli
                           olarak değişiklikler için Gizlilik Politikamızı kontrol etmenizi öneririz
                           </span>
                        </div>
                     </div>
                     <div></div>
                     <div></div>
                     <!----><!---->
                  </app-static-inner-content>
               </div>
            </div>
         </app-signup>
         <!---->
      </app-authentication>
      <!---->
      <payments-widget>
         <!---->
         <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1025;">
            <div class="modal-header"><a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons white-text">close</i></a></div>
            <!---->
         </div>
      </payments-widget>
   </main>
   <app-footer>
      <!---->
      <footer class="page-footer">
         <div class="footer-menu">
            <ul class="links">
               <li><a href="/tr/contents/about-us">Şirket Hakkında</a></li>
               <li><a href="/tr/contents/support-rules">Kurallar</a></li>
               <li><a href="/tr/contents/about-us-gen-terms-cond">Genel Şartlar ve Kurallar</a></li>
               <li><a href="/tr/contents/about-us-responsible-gaming">Sorumlu Oyun</a></li>
               <li><a href="/tr/contents/about-us-privacy-policy">Gizlilik Politikası</a></li>
               <li><a href="/tr/contents/about-us-terms-of-use">Kullanım Kuralları</a></li>
               <li><a href="/tr/contents/about-us-contact">Bize Ulaşın</a></li>
               <li><a href="/tr/contents/promotions">BONUSLAR</a></li>
               <li><a href="/tr/contents/promotions-general-rules">Genel Bonus Kuralları</a></li>
               <li><a href="/tr/contents/custom-event-rules">Özel Karşılaşmalar</a></li>
               <li><a href="/tr/contents/cashout-content">Bahis Bozdur</a></li>
               <!---->
            </ul>
         </div>
         <div class="social-media">
            <social-links classes="social-links">
               <ul class="social-links">
                  <!----><!----><!----><!----><!---->
                  <li><a target="_blank" href="https://t.me/perabetofficial"><i class="fa fa-telegram"></i></a></li>
                  <!----><!----><!----><!----><!----><!---->
               </ul>
            </social-links>
         </div>
         <div class="footer-copyright">
            <div class="container">
               <span>© 2013 - 2024 Copyright perabet</span>
               <div class="playgo-content">
                  <div class="container flex-container">
                     <div class="playgo-lisans">
                        <app-static-inner-content contentcode="licence-html">
                           <div extroutelink="" id="licence-html">
                              <div id="apg-025a76df-7f8d-46be-9fac-a6ce926d3a82" data-apg-seal-id="025a76df-7f8d-46be-9fac-a6ce926d3a82" data-apg-image-size="32" data-apg-image-type="basic-small"></div>
                           </div>
                           <div></div>
                           <div>
                              <style type="text/css">
                                 #apg-025a76df-7f8d-46be-9fac-a6ce926d3a82> div {min-width:64px !important;}
                              </style>
                           </div>
                           <!----><!---->
                        </app-static-inner-content>
                     </div>
                     <div class="playgo-text flex-item"> Perabet.com website is owned and operated by SXM Management N.V., a company incorporated under the laws of Curacao with company registration number 138661 and having its registered address at Groot Kwartierweg 10 Livestrong Building, Curacao, authorised by Curacao Antillephone N.V. License Validator, Antillephone N.V. license number #8048/JAZ. </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-partner">
            <div class="container"><i class="inline-block icon-footer-wac"></i><i class="inline-block icon-footer-spini"></i><i class="inline-block icon-footer-tomhorn"></i><i class="inline-block icon-footer-paragmatic"></i><i class="inline-block icon-footer-betsoft"></i><i class="inline-block icon-footer-netent"></i><i class="inline-block icon-footer-pronet"></i><i class="inline-block icon-footer-lucky"></i><i class="inline-block icon-footer-xpg"></i><i class="inline-block icon-footer-betgames"></i><i class="inline-block icon-footer-blueprint"></i><i class="inline-block icon-footer-ezugi"></i><i class="inline-block icon-footer-evo"></i><i class="inline-block icon-footer-amusnet"></i></div>
         </div>
         <app-static-inner-content contentcode="m_footer-static">
            <div extroutelink="" id="m_footer-static">
               <section id="footer-bottom-custom-code">
                  <a href="https://peramobile.one/" class="canli-tv-link" target="_blank">
                  <i class="pg-icons fa fa-mobile"></i> <strong>MOBİL</strong> UYGULAMA
                  </a>
                  <a href="http://onay.io/Tv2" class="canli-tv-link" target="_blank">
                  <i class="pg-icons fa fa-television"></i> CANLI MAÇ İZLE
                  </a>
               </section>
            </div>
            <div></div>
            <div>
               <style type="text/css">
                  #footer-bottom-custom-code {
                  position: fixed;
                  z-index: 591;
                  bottom: 50px;
                  left: 0;
                  width: calc(100% - 0px);
                  background-color: #f5bb1b;
                  color: #232a34;
                  font-family: arial;
                  font-size: 12px;
                  display: flex;
                  }
                  #footer-bottom-custom-code a {
                  color: #232a34;
                  text-decoration: none;
                  width: 50%;
                  padding: 10px;
                  font-weight: bold;
                  border-right: 1px solid #232a34;
                  display: flex;
                  align-content: center;
                  align-items: center;
                  justify-content: center;
                  border-bottom: 1px solid #232a34;
                  }
                  #footer-bottom-custom-code a i {
                  padding: 0 10px;
                  }
                  .modal .modal-content {
                  background: #12151a;
                  color: #fff;
                  }
                  #BalanceModal .balance-menu a {
                  color: #fff!important;
                  }
               </style>
            </div>
            <!----><!---->
         </app-static-inner-content>
         <div class="payments">
            <div class="payments-wrapper"><i class="icon-footer p1"></i><i class="icon-footer p2"></i><i class="icon-footer p4"></i><i class="icon-footer p5"></i><i class="icon-footer p6"></i><i class="icon-footer p7"></i><i class="icon-footer p15"></i><i class="icon-footer p12"></i><i class="icon-footer p13"></i><i class="icon-footer p14"></i></div>
         </div>
         <link rel="stylesheet" href="//v3.pronetstatic.com/m-common/assets/css/core.css">
      </footer>
      <app-static-inner-content contentcode="m_footer-for-setup">
         <div extroutelink="" id="m_footer-for-setup">
            <!--  -->
            <!-- Start of smartico code -->
            <!-- End of smartico code -->
         </div>
         <div>
            <script type="text/javascript" src="https://383f9af6-d973-4d64-88dc-e7d0410384bd.snippet.antillephone.com/apg-seal.js"></script><script type="text/javascript" src="https://025a76df-7f8d-46be-9fac-a6ce926d3a82.snippet.antillephone.com/apg-seal.js"></script><script type="text/javascript"></script><script type="text/javascript"></script><script type="text/javascript">
               var sealCDN = setInterval(function(){
                 if(typeof apg_025a76df_7f8d_46be_9fac_a6ce926d3a82 !== 'undefined'){
                   clearInterval(sealCDN);
                   setTimeout(function(){
                     apg_025a76df_7f8d_46be_9fac_a6ce926d3a82.init()
                   })
                 }
               },50);
            </script><script type="text/javascript">
               function setSmarticoUser() {
                   window._smartico_user_id = !!window.isLoggedInUser ? window.isLoggedInUser.customerId : null;
                   window._smartico_language = !!window.isLoggedInUser ? document.documentElement.lang : null;
               }
               
               setTimeout(function() {
                   setSmarticoUser();
               }, 5000);
               
               
               window.addEventListener('trackingDatas', function(event){ 
                   setTimeout(function(){
                   if(event.detail.event === 'userLoggedIn' || event.detail.event === 'userLoggedOut'){
                       setSmarticoUser();
                   }
                   }, 1000);
               });
            </script><script type="text/javascript">
               (function(d, r, b, h, s){h=d.getElementsByTagName('head')[0];s = d.createElement('script');s.onload=b;s.src=r;h.appendChild(s);})
               (document, 'https://libs.smartico.ai/smartico.js', function() {
                   _smartico.init('10018226-67a6-4f46-83c7-6693286374e8-4', { brand_key: 'be6b41e8' });
               });
            </script>
         </div>
         <div>
            <style type="text/css">
               .page-deposit .modul-content .money-list-cont .money-list-menu {display:none;}
            </style>
         </div>
         <!----><!---->
      </app-static-inner-content>
   </app-footer>
</div>