
<div class="text-left">
<table>
    <tr>
    <button class="btn btn-success btn-sm" 
    onclick="window.location.href = '{{ route('cfr_clients.show', $id ) }}';"
    >
    <img src="https://img.icons8.com/dusk/64/000000/visible.png" width="24px" height="24px">
           
</button>


<button  class="edit-modal btn btn-info btn-sm" value="{{$id}}" data-toggle="modal"  
    onclick="edit(this);" data-target="#modaledit">
    <img src="https://img.icons8.com/dusk/64/000000/multi-edit.png" width="24px" height="24px">
             <font class="text-center" style="vertical-align: inherit;">
             </font>
</button>


    </tr>

</table>
</div>




