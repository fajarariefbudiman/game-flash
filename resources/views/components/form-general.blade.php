<div class="tab-pane fade show active" id="widget-tabbed-general" role="tabpanel" aria-labelledby="general-tab">
    <!-- General Form Content -->
    <form method="POST" action="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" class="rounded bg-white pb-5 form-signin w-auto text-uppercase">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- Username -->
            <div class="col-6 mb-3">
                <x-input-label for="username" :value="__('Username')" />
                <input type="text" class="form-control form-control-half" id="username" name="username" value="{{ auth()->user()->username }}" @readonly(true)>
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="col-6 mb-3">
                <x-input-label for="email" :value="__('email')" />
                <input type="email" class="form-control form-control-half" id="email" name="email" value="{{ auth()->user()->email }}" @readonly(true)>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- First Name -->
            <div class="col-6 mb-3">
                <x-input-label for="firstname" :value="__('firstname')" />
                <input type="text" class="form-control form-control-half" id="firstname" name="firstname" value="{{ auth()->user()->firstname }}" required>
                @error('firstname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="col-6 mb-3">
                <x-input-label for="lastname" :value="__('lastname')" />
                <input type="text" class="form-control form-control-half" id="lastname" name="lastname" value="{{ auth()->user()->lastname }}" required>
                @error('lastname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Birt Date -->
            <div class="col-6 mb-3">
                <x-input-label for="birth_date" :value="__('birth date')" />
                <input type="date" class="form-control form-control-half" id="birth_date" name="birth_date" value="{{ auth()->user()->birth_date ?? '' }}" @required(false)>
                @error('birth_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="col-6 mb-3">
                <x-input-label for="phone_number" :value="__('phone number')" />
                <input type="text" class="form-control form-control-half" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number ?? '' }}" @required(false)>
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nationality -->
            <div class="col-6 mb-3">
                <x-input-label for="nationality" :value="__('nationality')" />
                <select class="form-control form-control-half" id="nationality" name="nationality" required>
                    <option value="{{ auth()->user()->nationality }}" selected>{{ auth()->user()->nationality }}</option>
                    <option value="US">United States</option>
                    <option value="ID">Indonesia</option>
                    <option value="JP">Japan</option>
                </select>
                @error('nationality')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Community -->
            <div class="col-6 mb-3">
                <x-input-label for="community" :value="__('community')" />
                <select class="form-control form-control-half" id="community" name="community" required>
                    <option value="{{ auth()->user()->community }}" selected>{{ auth()->user()->community }}</option>
                    <option value="gaming">Gaming</option>
                    <option value="sports">Sports</option>
                    <option value="tech">Technology</option>
                </select>
                @error('community')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>
