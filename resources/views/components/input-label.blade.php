@props(['value'])
<label for="username" class="form-label">{{$value ?? $slot}}</label>
