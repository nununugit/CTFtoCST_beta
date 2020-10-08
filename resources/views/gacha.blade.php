@extends('layouts.navbar')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta name="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="roulette_test2.css">
    
    </head>
    <body>
      <div class="roulette">

        <div class="main">
          <button type="button" class="btn" id="spin"><span class="btn-label">Spin</span></button>
          <button type="button" class="btn btn-reset" id="reset"><span class="btn-label">New Game</span></button> 
          <div class="plate" id="plate">
            <ul class="inner">
              <li class="number"><label><input type="radio" name="pit" value="15" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="19" /><span class="pit">19</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="4" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="21" /><span class="pit">21</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="2" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="25" /><span class="pit">25</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="17" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="34" /><span class="pit">34</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="6" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="27" /><span class="pit">27</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="13" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="36" /><span class="pit">36</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="11" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="30" /><span class="pit">30</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="8" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="23" /><span class="pit">23</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="10" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="5" /><span class="pit">5</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="24" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="16" /><span class="pit">16</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="33" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="1" /><span class="pit">1</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="20" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="14" /><span class="pit">14</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="31" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="9" /><span class="pit">9</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="22" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="18" /><span class="pit">18</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="29" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="7" /><span class="pit">7</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="28" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="12" /><span class="pit">12</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="35" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="3" /><span class="pit">3</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="26" /><span class="pit"></span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="32" /><span class="pit">32</span></label></li>
              <li class="number"><label><input type="radio" name="pit" value="0" /><span class="pit">0</span></label></li>
      
            </ul>
      
            <div class="data">
              <div class="data-inner">
                <div class="mask"></div>
                <div class="result">
                  <div class="result-number">00</div>
                  <div class="result-color">red</div>        
                </div>
              </div>
            </div>
          </div>
      
          <div class="previous-results">
            <ol class="previous-list">
              <li class='visuallyhidden placeholder'>No results yet.</li>
            </ol>
          </div>
        </div>
      
      </div>
<script src="{{ asset('js/roulette.js') }}" defer></script>
<script src="{{ asset('js/roulette_conf_jquery.js') }}" defer></script>
<link href="{{ asset('css/roulette.css') }}" rel="stylesheet">

  </body>
@endsection
