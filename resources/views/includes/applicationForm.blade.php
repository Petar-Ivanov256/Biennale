<form method="POST" action="apply" class="form-horizontal">
    <div class="form-group">
      <label for="name" class="col-lg-2 control-label">Име и фамилия</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="name" name="name" placeholder="Име и фамилия">
      </div>
    </div>
    <div class="form-group">
      <label for="country" class="col-lg-2 control-label">Държава</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="country" name="country" placeholder="Държава">
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">E-mail</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
      </div>
    </div>
    <div class="form-group">
      <label for="phone-number" class="col-lg-2 control-label">Телефон</label>
      <div class="col-md-4">
          <input type="tel" class="form-control" id="phone-number" name="phoneNumber" placeholder="Телефон">
      </div>
    </div>
    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Оригинално заглавие</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="title" name="title" placeholder="Оригинално заглавие">
      </div>
    </div>
    <div class="form-group">
      <label for="en-title" class="col-lg-2 control-label">Заглавие на английски език</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="en-title" name="englishTitle" placeholder="Заглавие на английски език">
      </div>
    </div>
    <div class="form-group">
      <label for="dimensions" class="col-lg-2 control-label">Размери (в/ш/д)</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="dimensions" name="dimensions" placeholder="в / ш / д">
      </div>
    </div>
    <div class="form-group">
      <label for="installation-guide" class="col-lg-2 control-label">Насоки за поставяне</label>
      <div class="col-md-4">
          <textarea class="form-control" rows="3" id="installation-guide" name="installationGuide"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="year" class="col-lg-2 control-label">Година на създаване</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="year" name="year" placeholder="Година на създаване">
      </div>
    </div>
    <div class="form-group">
      <label for="synopsis" class="col-lg-2 control-label">Синопсис</label>
      <div class="col-md-4">
          <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Синопсис">
      </div>
    </div>
    <input type="hidden" value="{{ Session::token() }}" name="_token">
    <div class="form-group">
      <div class="col-md-4 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Изпрати</button>
      </div>
    </div>
</form>