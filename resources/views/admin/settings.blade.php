@extends('layout.admin')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">
        Website Settings
    </h2>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>
    </div>
    @endif

    <form action="/admin/settings" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="card">

            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Temple Name</label>

                    <input
                        type="text"
                        class="form-control"
                        name="site_name"
                        value="{{ old('site_name', $setting->site_name ?? '') }}">
                    @error('site_name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>

                    <input
                        type="text"
                        class="form-control"
                        name="phone"
                        value="{{ old('phone', $setting->phone ?? '') }}">
                    @error('phone')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        value="{{ old('email', $setting->email ?? '') }}">
                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>

                    <textarea
                        class="form-control"
                        rows="3"
                        name="address">{{ old('address', $setting->address ?? '') }}</textarea>
                    @error('address')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
                <hr>

                <h5 class="mb-3">Social Media Links</h5>

                <div class="mb-3">
                    <label class="form-label">Facebook</label>
                    <input
                        type="url"
                        class="form-control"
                        name="facebook"
                        value="{{ old('facebook', $setting->facebook ?? '') }}">
                    @error('facebook')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Instagram</label>
                    <input
                        type="url"
                        class="form-control"
                        name="instagram"
                        value="{{ old('instagram', $setting->instagram ?? '') }}">
                    @error('instagram')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Twitter (X)</label>
                    <input
                        type="url"
                        class="form-control"
                        name="twitter"
                        value="{{ old('twitter', $setting->twitter ?? '') }}">
                    @error('twitter')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn</label>
                    <input
                        type="url"
                        class="form-control"
                        name="linkedin"
                        value="{{ old('linkedin', $setting->linkedin ?? '') }}">
                    @error('linkedin')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Pinterest</label>
                    <input
                        type="url"
                        class="form-control"
                        name="pinterest"
                        value="{{ old('pinterest', $setting->pinterest ?? '') }}">
                    @error('pinterest')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Logo</label>

                    <input
                        type="file"
                        class="form-control"
                        name="logo">

                    @if(!empty($setting?->logo))
                    <img
                        src="{{ asset('storage/'.$setting->logo) }}"
                        width="120"
                        class="mt-3">
                    @endif
                    @error('logo')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
                <hr>

                <h5 class="mb-3">Footer Settings</h5>

                <div class="mb-3">
                    <label class="form-label">Footer Text</label>

                    <textarea
                        class="form-control"
                        rows="3"
                        name="footer_text">{{ old('footer_text', $setting->footer_text ?? '') }}</textarea>
                    @error('footer_text')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Copyright</label>

                    <input
                        type="text"
                        class="form-control"
                        name="copyright"
                        value="{{ old('copyright', $setting->copyright ?? '') }}">
                    @error('copyright')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <button class="btn btn-primary">
                    Save Settings
                </button>

            </div>

        </div>

    </form>

</div>

@endsection