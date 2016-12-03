@extends('layouts.master')
@section('title')
Новини
@endsection

@section('content')
<div class="col-md-8 col-md-offset-2">
    <form method="POST" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label for="title" class="col-lg-2 control-label">Заглавие</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="content" name="title" placeholder="Заглавие" value="{{ Request::old('title') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="photo" class="col-lg-2 control-label">Снимка</label>
            <div class="col-md-4">
                <input type='file' class="form-control" id="photo" name="photo" value="{{ Request::old('photo') }}">
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="content" name="content">
                <p style="text-align: center;">
                  <img title="TinyMCE Logo" src="//www.tinymce.com/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" />
                </p>

                <h1 style="text-align: center;">Welcome to the TinyMCE editor demo!</h1>

                <p>
                  Please try out the features provided in this basic example.<br>
                  Note that any <strong>MoxieManager</strong> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.
                </p>

                <h2>Got questions or need help?</h2>

                <ul>
                  <li>Our <a href="http://www.tinymce.com/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
                  <li>Have a specific question? Visit the <a href="http://community.tinymce.com/forum/" target="_blank">Community Forum</a>.</li>
                  <li>We also offer enterprise grade support as part of <a href="www.tinymce.com/pricing">TinyMCE Enterprise</a>.</li>
                </ul>

                <h2>A simple table to play with</h2>

                <table style="text-align: center;">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Cost</th>
                      <th>Really?</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>TinyMCE</td>
                      <td>Free</td>
                      <td>YES!</td>
                    </tr>
                    <tr>
                      <td>Plupload</td>
                      <td>Free</td>
                      <td>YES!</td>
                    </tr>
                  </tbody>
                </table>

                <h2>Found a bug?</h2>

                <p>
                  If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.
                </p>

                <h2>Finally ...</h2>

                <p>
                  Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.
                </p>
                <p>
                  Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.
                </p>
            </textarea>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Добави</button>
            </div>
        </div>
    </form>
</div>

<script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('js/tinymceSettings.js') }}"></script>
@endsection