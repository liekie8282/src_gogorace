<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- <div class="modal hide fade"> -->
<div class="modal show">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>�α���</h3>
  </div>
  <div class="modal-body">
	<!-- ��Ʈ��Ʈ�� Start -->
    <form class="form-horizontal" action="/auth/authentication" method="post">
      <div class="control-group">
        <label class="control-label" for="id">���̵�</label>
        <div class="controls">
          <input type="text" name="id" id="id" placeholder="id">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="pwd">��й�ȣ</label>
        <div class="controls">
          <input type="password" name="pwd" id="pwd" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="�α���">
        </div>
      </div>
    </form>
<!-- ��Ʈ��Ʈ�� End -->
  </div>
</div>