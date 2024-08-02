@props(['playerGameInfo'])
<div class="tab-pane fade" id="widget-tabbed-eFootball" role="tabpanel" aria-labelledby="eFootball-tab">
    <!-- eFootball Form Content -->
    <form method="POST" action="{{ route('profile.updateGame', ['game' => 'eFootball']) }}" class="rounded bg-white pb-5 form-signin w-auto text-uppercase">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <!-- eFootball Specific Fields -->

            <!-- Gamertag -->
            <div class="col-6 mb-3">
                <label for="gamertag" class="form-label">{{ __('Gamertag') }}</label>
                <input type="text" class="form-control" id="gamertag" name="gamertag" value="{{ $playerGameInfo->gamertag ?? '' }}" required>
                @error('gamertag')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Kit Number -->
            <div class="col-6 mb-3">
                <label for="kit_number" class="form-label">{{ __('Kit Number') }}</label>
                <input type="text" pattern="\d*" inputmode="numeric" class="form-control" value="{{ $playerGameInfo->kit_number ?? '' }}" id="kit_number" name="kit_number" required>
                @error('kit_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Console -->
            <div class="col-6 mb-3">
                <label for="console" class="form-label">{{ __('Console') }}</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="console" id="console_ps4" value="ps4" {{ $playerGameInfo->console == 'ps4' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="console_ps4">
                        PS4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="console" id="console_xbox" value="xbox" {{ $playerGameInfo->console == 'xbox' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="console_xbox">
                        Xbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="console" id="console_origin" value="origin" {{ $playerGameInfo->console == 'origin' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="console_origin">
                        Origin
                    </label>
                </div>
                @error('console')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Position -->
            <div class="col-6 mb-3">
                <label for="position" class="form-label">{{ __('Position') }}</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $playerGameInfo->position ?? '' }}" required>
                @error('position')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <button type="submit" class="btn btn-primary w-100">Save eFootball</button>
    </form>
</div>
