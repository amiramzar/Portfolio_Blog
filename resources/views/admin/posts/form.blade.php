<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#postDetails" role="tab" aria-controls="home" aria-selected="true">Post Details</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="profile" aria-selected="false">SEO</a>
  </li>
</ul>
<div class="tab-content my-3" id="myTabContent">
  <div class="tab-pane fade show active" id="postDetails" role="tabpanel" aria-labelledby="home-tab">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        <label for="title" class="control-label">{{ 'Title' }}</label>
        <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
        <label for="content" class="control-label">{{ 'Content' }}</label>
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($post->content) ? $post->content : ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
        <label for="slug" class="control-label">{{ 'Slug' }}</label>
        <input class="form-control" name="slug" type="text" id="slug" value="{{ isset($post->slug) ? $post->slug : ''}}" >
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
        <label for="category_id" class="control-label">{{ 'Category' }}</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <!-- <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($post->category_id) ? $post->category_id : ''}}" > -->
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
        </div>
  </div>

  <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="profile-tab">  
    <div class="form-group {{ $errors->has('keywords') ? 'has-error' : ''}}">
        <label for="keywords" class="control-label">{{ 'Keywords' }}</label>
        <textarea class="form-control" rows="5" name="keywords" type="textarea" id="keywords" >{{ isset($post->keywords) ? $post->keywords : ''}}</textarea>
        {!! $errors->first('keywords', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        <label for="description" class="control-label">{{ 'Description' }}</label>
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($post->description) ? $post->description : ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
