@if(config('larasnap.module_list.permission.search'))				 
   <input type="text" name="search" placeholder="Search Permission..." class="form-control ml-10" value="{{ $filters['search'] }}">
@endif				  
