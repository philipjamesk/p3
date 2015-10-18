<div class="row">
  <div class="col-lg-12">
    <h2>Password Generator</h2>
    <p>Your clever password may not be as secure as you think. See <a href="https://xkcd.com/936/" target="_blank">this comic</a> for more information. After that, you can use our free password generator to create an xkcd style password. The password is generated use a Google compiled list of 10,000 common English words. For added security, add a random number to the start, some random characters to the end, or switch up the seperator between words and the word case.</p>
    <form method="POST" actions="/password">
      <div class="form-group">
        <label>Number of words (4-12):</label>
        <input type="text" name="number_of_words" value={{ old('number_of_words', '4')}}>
      </div>
      <div class="form-group">
        <label>Shortest words (min 4):</label>
        <input type="text" name="minimum" value={{ old('minimum', '4')}}>
      </div>
      <div class="form-group">
        <label>Longest words (max 12):</label>
        <input type="text" name="maximum" value={{ old('maximum', '12')}}>
      </div>
      <div class="form-group">
        <input type="checkbox" name="add_number" >
        <label for="add_number">Random number
        <select name="numbers" id="numbers">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
        digits</label>
      </div>
      <div class="form-group">
        <input type="checkbox" name="add_char" >
        <label for="add_char">Random characters
        <select name="chars" id="chars">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
        characters</label>
      </div>
      <div class="form-group">
        <label for="seperator">Chose a seperator:</label>
        <select name="seperator" id="seperator">
          <option value="">(none) ''</option>
          <option value=" ">(space) ' '</option>
          <option value="-" selected>hyphen '-'</option>
          <option value=".">dot '.'</option>
        </select>
      </div>
      <div class="form-group">
        <label>What case would you like?</label><br>
        <label class="radio-inline">
          <input type="radio" name="case" value="lowercase">lowercase</label>
        <label class="radio-inline">
          <input type="radio" name="case" value="camelcase" checked>camelCase</label>
        <label class="radio-inline">
          <input type="radio" name="case" value="uppercase">UPPERCASE</label>
      </div>
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      <button type="submit" class="btn btn-primary">Generate Password</button>
    </form>
  </div>
</div> <!-- end row -->