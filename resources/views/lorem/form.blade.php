<h2>Free Placeholder Text</h2>
<form method="POST" action="/lorem">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <fieldset>
      <label for="paragraphs">Number of Paragraphs (1-99):</label>
      <input type="text" id="paragraphs" name="paragraphs" value={{ old('paragraphs', '5') }}>
    </fieldset>
    <button type="submit" class="btn btn-primary">Generate Text</button>
</form>