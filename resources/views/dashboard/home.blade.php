@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Home Page</h1>
        </div>

        <div class="section-body">
        </div>
    </section>
@endsection


@section('sidebar')
    @parent
    <li class="menu-header">Forms</li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
        </ul>
    </li>
@endsection
