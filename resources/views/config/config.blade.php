<?php

	function CreateModal($id, $desc, $content) 

	{

		$modal = '<div class="modal fade" id="'.$id.'"  role="dialog" aria-labelledby="" aria-hidden="true"> <div class="modal-dialog modal-lg"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title mt-0" id="">'.$desc.'</h5><button type="button" class="close"data-dismiss="modal" aria-hidden="true">×</button> </div> <div class="modal-body"> '.$content.'</div> </div> </div> </div> ';
       echo $modal;


	}

	

