<h2>Create Random Users</h2>
<p>The form be use below to create random users for your website.</p> 
<p>Select from commonly used attributes.</p>
<p>For ease of use, after generating your users, scroll down and click "Get JSON" for a JSON file to save for future use.</p>
<form method="POST" action="/users">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
  <fieldset>
    <label for="number">How Many Users (1-100):</label>
    <input type="text" id="number" name="number" value={{ old('number', '10') }}>
  </fieldset>
  <h3>Options</h3>
  <fieldset>
    <label for="name">Name:</label>
    <input type="checkbox" name="options[name]" value="name" id="name" {{ old('options.name') ? "checked" : "" }}>
  </fieldset>
  <fieldset>
    <label for="email">Email:</label>
    <input type="checkbox" name="options[email]" value="email" id="email" {{ old('options.email') ? "checked" : "" }}>
  </fieldset>
  <fieldset>
    <label for="username">Username:</label>
    <input type="checkbox" name="options[username]" value="username" id="username" {{ old('options.username') ? 'checked' : '' }}>
  </fieldset>
  <fieldset>
    <label for="address">Address:</label>
    <input type="checkbox" name="options[address]" value="address" id="address" {{ old('options.address') ? 'checked' : '' }}>
  </fieldset>
  <fieldset>
    <label for="phone">Phone Number:</label>
    <input type="checkbox" name="options[phone]" value="phone" id="phone" {{ old('options.phone') ? 'checked' : '' }}>
  </fieldset>
  <button type="submit" class="btn btn-primary">Generate Users</button>
</form>