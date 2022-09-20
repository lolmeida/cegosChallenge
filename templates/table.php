<br><br>
<div class="row">


  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="filter" class="form-label">Filter by</label>
      <select id="filter" class="form-select">
        <option value="*">ALL</option>
        <option value="InternalClient">InternalClient</option>
        <option value="Client">Client</option>
        <option value="Module">Module</option>
        <option value="Language">Language</option>
        <option value="Date">Date</option>
        <option value="Mobile">Mobile</option>
      </select>
    </div>
    <div class="col-auto">
      <label for="search" class="form-label">Search</label>
      <input type="text" id="search" name="search" class="form-control" placeholder="search">
    </div>
    <div class="col-auto">
      <label for="btn-search" class="form-label"></label>
      <input type="button" id="btn-search" class="btn" value="Search">
    </div>
    <div class="col-auto">
      <label for="btn-export" class="form-label"></label>
      <input type="button" id="dwnl-excel" class="btn" value="Export to excel">
    </div>

  </div>


  <div class="table-responsive">
    <table class="table" id="table">
      <thead id="theader">
        <tr>

          <th scope="col">InternalClient</th>
          <th scope="col">Client</th>
          <th scope="col">Module</th>
          <th scope="col">Language</th>
          <th scope="col">URL</th>

          <th scope="col">Width</th>
          <th scope="col">Height</th>
          <th scope="col">Browser</th>
          <th scope="col">BrowserVersion</th>
          <th scope="col">Java</th>
          <th scope="col">Mobile</th>
          <th scope="col">OS</th>
          <th scope="col">OSVersion</th>
          <th scope="col">Cookies</th>
        </tr>
      </thead>
      <tbody id="table-body">

      </tbody>
    </table>
  </div>
</div>