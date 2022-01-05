<?php
$sukses = $this->session->flashdata('login');
if (isset($sukses)) {
    echo '<div class="alert alert-danger alert-dismissible fade show"style="width:350px" role="alert">
  ' . $sukses . '
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
  <span>&times</span>
  </button>
</div>';
    $this->session->unset_userdata('login');
}
