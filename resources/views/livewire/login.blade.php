  <form wire:submit.prevent='login' class="signin-form">
  	<div class="form-group">
  		<input wire:model="userName" type="text" class="form-control" placeholder="Username" required>
  	</div>
  	@error('userName') <span class="error">{{ $message }}</span> @enderror
  	<div class="form-group">
  		<input wire:model="userPassword" type="text" class="form-control" placeholder="Password" required>
  		@error('userPassword') <span class="error">{{ $message }}</span> @enderror
  	</div>

  	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>


  </form>