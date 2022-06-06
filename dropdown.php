<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <a
  class="nav-link dropdown-toggle hidden-arrow btn btn-primary"
  href="#"
  id="navbarDropdownMenuLink"
  role="button"
  data-mdb-toggle="dropdown"
  aria-expanded="false"
>
  dropdown
</a>
<ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
  <li>
    <div class="input-group mt-2 mx-2">
      <div class="form-outline">
        <input type="search" id="form1" class="form-control-dropdown" />
        <label class="form-label" for="form1">Search</label>
      </div>
    </div>
  </li>
  <li><hr class="dropdown-divider" /></li>
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
    </body>
</html>

<script>
const searchInputDropdown = document.getElementById('search-input-dropdown');
const dropdownOptions = document.querySelectorAll('.input-group-dropdown-item');

searchInputDropdown.addEventListener('input', () => {
  const filter = searchInputDropdown.value.toLowerCase();
  showOptions();
  const valueExist = !!filter.length;

  if (valueExist) {
    dropdownOptions.forEach((el) => {
      const elText = el.textContent.trim().toLowerCase();
      const isIncluded = elText.includes(filter);
      if (!isIncluded) {
        el.style.display = 'none';
      }
    });
  }
});

const showOptions = () => {
  dropdownOptions.forEach((el) => {
    el.style.display = 'flex';
  })
}
</script>
