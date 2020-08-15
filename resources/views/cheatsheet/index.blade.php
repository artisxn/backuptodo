@extends('layouts.cheatsheet')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white     border-bottom shadow-sm">
  <nav class="my-0 mr-md-0 font-weight-light">
      <a class="p-2 text-dark" href="#git-commands">Git Commands</a>
      <a class="p-2 text-dark" href="#iterm-alias">iTerm Alias</a>            
  </nav>
</div>  

<main role="main">
  <div class="container text-white bg-secondary border p-2 border-secondary my-4">
    <h1 class="text-center">
      <a class="text-dark" href="#git-commands">Git Commands</a>
    </h1>
    <hr>
    <p class="lead text-center">New Repository</p>
    <ul>
    <li>New Repo in Github</li>
    <li>git init</li>
    <li>git remote add origin https://github.com/codicastudio/Route-List.git</li>
    <li>git add .</li>
    <li>git commit -am "Initial commit."</li>
    <li>git push origin master</li>
    <li>git tag 0.0.1 && git push --tags</li>
    <li>In Github, create Readme.md & LICENSE.MD</li>
    <li>git pull, git add . , git commit -m, git push</li>
    </ul>
    <p class="lead text-center">New Branch</p>
    <ul>
      <li>git checkout -b <branch></li>
    </ul>
  </div>

  <div class="container text-white bg-secondary border p-2 border-secondary my-4">
    <h1 class="text-center">
      <a class="text-dark" href="#iterm-alias" id="iterm-alias">iTerm Alias Commands</a>
    </h1>
    <hr>
    <p class="lead text-center">Alias List</p>
    <ul>
    <li>newsrc</li>
    <li>zshconfig</li>
    <li>cdhome</li>
    <li>cddev</li>
    <li>cdclients</li>
    <li>cdmasterb</li>
    <li>cdmys</li>
    <li>cdpkg</li>
    <li>cdsnd</li>
    </ul>
  </div>  

</main>

@endsection

