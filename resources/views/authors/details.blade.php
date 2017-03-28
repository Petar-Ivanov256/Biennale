@extends('layouts.master')
@section('title')
    Автор - {{ $author->name }}
@endsection

@section('content')

<div class="container">
  <h1>За автора</h1>
  <table class="table table-striped table-hover">
    <tr>
      <td>Име</td>
      <td>{{ $author->name }}</td>
    </tr>
    <tr>
      <td>Име на английски</td>
      <td>{{ $author->name_en ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Държава</td>
      <td>{{ $author->country->title ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Пол</td>
      <td>{{ $author->gender == 1 ? trans('about.female') : trans('about.male') }}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{ $author->email ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>{{ $author->name_en ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Информация за автора</td>
      <td>{{ $author->info ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Информация на английски</td>
      <td>{{ $author->info_en ?? 'не е въведено' }}</td>
    </tr>
    <tr>
      <td>Снимка на автора</td>
      <td><img src="{{ $author->photo }}"></td>
    </tr>
  </table>
  <a href="{{ url('/admin/authors/edit/' . $author->id) }}" class="btn btn-warning">Редактирай автора</a>

  <h1>Творби на автора</h1>
  @if ($author->works->count() == 0)
    Няма творби
  @else
    @foreach ($author->works as $work)
      <table class="table table-striped table-hover">
        <tr>
          <td>Заглавие</td>
          <td>{{ $work->title ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Заглавие на английски</td>
          <td>{{ $work->englishTitle ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Размери</td>
          <td>{{ $work->dimensions ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Насоки за поставяне</td>
          <td>{{ $work->installationGuide ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Година</td>
          <td>{{ $work->year ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Синопсис</td>
          <td>{{ $work->synopsis ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Синопсис на английски</td>
          <td>{{ $work->synopsis_en ?? 'не е въведено' }}</td>
        </tr>
        <tr>
          <td>Снимка 1</td>
          <td><img src="{{ $work->photo1 }}"></td>
        </tr>
        <tr>
          <td>Снимка 2</td>
          <td><img src="{{ $work->photo2 }}"></td>
        </tr>
        <tr>
          <td>Техники</td>
          <td>
            @foreach ($work->techniques as $technique)
              @if ($technique->name == $work->techniques->first()->name)
                {{ $technique->name }}
              @else
                , {{ $technique->name }}
              @endif
            @endforeach
          </td>
        </tr>
      </table>
      <a href="{{ url('/admin/works/edit/' . $work->id) }}" class="btn btn-warning">Редактирай горната творба</a>
    @endforeach
  @endif

</div>

@endsection
