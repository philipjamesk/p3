<div class="row">
  <div class="col-lg-12">
    <h2>Password Generator</h2>
    <p>Your clever password may not be as secure as you think. See <a href="https://xkcd.com/936/" target="_blank">this comic</a> for more information. After that, you can use our free password generator to create an xkcd style password. The password is generated use a Google compiled list of 10,000 common English words. For added security, add a random number to the start, some random characters to the end, or switch up the seperator between words and the word case.</p>
    <form method="POST" action="/password">
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
        <input type="checkbox" name="add_number" id="add_number" {{ old('add_number') ? 'checked' : '' }}>
        <label for="add_number">Random number
        <select name="numbers" id="numbers">
        @for ($i = 1; $i <= 10; $i++)
          <option value='{{ $i }}' {{ (old('numbers', '2') == $i) ? 'selected' : '' }}>{{ $i }}</option>
        @endfor 
        </select>
        digits</label>
      </div>
      <div class="form-group">
        <fieldset>
          <input type="checkbox" name="add_char" id="add_char" {{ old('add_char') ? 'checked' : '' }}>
          <label for="add_char">Random characters
        </fieldset>
        <select name="chars" id="chars">
        @for ($i = 1; $i <= 10; $i++)
          <option value='{{ $i }}' {{ (old('chars', '2') == $i) ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
        </select>
        characters</label>
      </div>
      <div class="form-group">
        <label for="seperator">Chose a seperator:</label>
        <select name="seperator" id="seperator">
          <option value=""  {{ old('seperator') == '' ? 'selected' : '' }}>(none) ''</option>
          <option value=" "  {{ old('seperator') == ' ' ? 'selected' : '' }}>(space) ' '</option>
          <option value="-"  {{ old('seperator', '-') == '-' ? 'selected' : '' }}>hyphen '-'</option>
          <option value="."  {{ old('seperator') == '.' ? 'selected' : '' }}>dot '.'</option>
        </select>
      </div>
      <div class="form-group">
        <label>What case would you like?</label><br>
        <label class="radio-inline">
          <input type="radio" name="case" value="lowercase" {{ old('case') == 'lowercase' ? 'checked' : '' }}>lowercase</label>
        <label class="radio-inline">
          <input type="radio" name="case" value="camelcase" {{ old('case', 'camelcase') == 'camelcase' ? 'checked' : '' }}>camelCase</label>
        <label class="radio-inline">
          <input type="radio" name="case" value="uppercase" {{ old('case') == 'uppercase' ? 'checked' : '' }}>UPPERCASE</label>
      </div>
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      <button type="submit" class="btn btn-primary">Generate Password</button>
    </form>
  </div>
</div> <!-- end row -->