<div class="row">
  <h1>TRACKING INFO</h1>
  <form name="formTools" action="./includes/dataToSave.php" method="get">

    <fieldset>
      <div id="message" class="alert "></div>
      <div class="row track">
        <div class="col-auto">
          Trackinginfo<br>
          <textarea class="danger" id="hash"  name="hash" rows="3" cols="50" placeholder="Copy and past the track here"></textarea>
        </div>
        <div class="col-auto">
          <textarea hidden id="record" name="record" rows="3" cols="50"></textarea>
        </div>
        <div class="col-auto">
          <input type="button" id="btn-save" class="btn" value="Save data">
        </div>
      </div>
    </fieldset>
    <hr>
    <div>

    </div>
  </form> <br><br>

</div>


<div id="frm-input" class="row">
  <form name="formSave" action="./includes/dataToSave.php" method="get">

    <fieldset disabled>
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="InternalClient" class="form-label">InternalClient</label>
          <input type="text" id="InternalClient" name="InternalClient" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Client" class="form-label">Client</label>
          <input type="text" id="Client" name="Client" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Module" class="form-label">Module</label>
          <input type="text" id="Module" name="Module" class="form-control" >
        </div>

        <div class="col-auto">
          <label for="Language" class="form-label">Language</label>
          <input type="text" id="Language" name="Language" class="form-control" >
        </div>
      
        
        <div class="col-auto">
          <label for="URL" class="form-label">URL</label>
          <input type="text" id="URL" name="URL" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Width" class="form-label">Width</label>
          <input type="text" id="Width" name="Width" class="form-control" >
        </div>

        <div class="col-auto">
          <label for="Height" class="form-label">Height</label>
          <input type="text" id="Height" name="Height" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Browser" class="form-label">Browser</label>
          <input type="text" id="Browser" name="Browser" class="form-control" >
        </div>
      
        
        <div class="col-auto">
          <label for="BrowserVersion" class="form-label">BrowserVersion</label>
          <input type="text" id="BrowserVersion" name="BrowserVersion" class="form-control" >
        </div>

        <div class="col-auto">
          <label for="Java" class="form-label">Java</label>
          <input type="text" id="Java" name="Java" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Mobile" class="form-label">Mobile</label>
          <input type="text" id="Mobile" name="Mobile" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="OS" class="form-label">OS</label>
          <input type="text" id="OS" name="OS" class="form-control" >
        </div>
      
        <div class="col-auto">
          <label for="OSVersion" class="form-label">OSVersion</label>
          <input type="text" id="OSVersion" name="OSVersion" class="form-control" >
        </div>
        <div class="col-auto">
          <label for="Cookies" class="form-label">Cookies</label>
          <input type="text" id="Cookies" name="Cookies" class="form-control" >
        </div>
      </div>

    </fieldset>



  </form>
</div>