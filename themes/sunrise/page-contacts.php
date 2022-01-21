<?php get_header(); ?>

    <div class="site-content flex-grow-1 flex-shrink-0 mt-5 mt-md-0">
        <section class="page mt-3">
          <div class="container">
            <div class="page-header mb-4">
              <h1 class="h2 page-title font-weight-normal text-center text-muted">Контакты</h1>
              <div class="page-subtitle lead text-center text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, iure?</div>
            </div>
            <div class="page-content">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="card px-3 pt-3 mb-5 bg-light contacts-address">
                    <address><strong>Organization name</strong><br>Polyska str., 17<br>Kropyvna<br>Ukrainian, 07234<br><a href="mailto:example@example.com">example@example.com</a></address>
                  </div>
                </div>
                <div class="col-md-6 col-lg-8">
                  <div class="contacts-map w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40240.465562601705!2d29.480380779139196!3d50.923178737299615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472bab1c9c15e0ab%3A0x74e778cb8f9f67ec!2z0JrRgNCw0L_QuNCy0L3Rjywg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgMDcyMzQ!5e0!3m2!1sru!2sua!4v1642090060482!5m2!1sru!2sua" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-lg-4"><img class="contacts-img img-fluid" src="assets/images/contacts/office.jpg" alt="Office"></div>
                <div class="col-lg-8">
                  <div class="card shadow mt-3 mt-lg-0">
                    <div class="card-header bg-secondary">
                      <h2 class="card-title lead text-light m-0">Оставить заявку</h2>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="form-group">
                          <label class="font-italic" for="formInputName">Ваше имя:</label>
                          <input class="form-control border border-secondary" id="formInputName" type="text" required="">
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputEmail">Email:</label>
                          <input class="form-control border border-secondary" id="formInputEmail" type="email" required="">
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputPhone">Телефон:</label>
                          <input class="form-control border border-secondary" id="formInputPhone" type="phone" required="">
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputPost">Должность:</label>
                          <input class="form-control border border-secondary" id="formInputPost" type="text">
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputOrg">Организация:</label>
                          <select class="form-control" id="formInputOrg">
                            <option>Государственное учреждение</option>
                            <option>НКО</option>
                            <option>Компания</option>
                            <option>Другое</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputSite">Сайт организации:</label>
                          <input class="form-control border border-secondary" id="formInputOrg" type="text">
                        </div>
                        <div class="form-group">
                          <label class="font-italic" for="formInputComments">Дополнительная информация:</label>
                          <textarea class="form-control border border-secondary" id="formInputComments" rows="5"></textarea>
                        </div>
                        <div class="form-group text-center">
                          <button class="btn btn-theme" type="submit">Отправить</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php get_footer(); ?>