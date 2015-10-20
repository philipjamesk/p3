<h2>Create Random Users</h2>
<p>The form be use below to create random users for your website. Select from commonly used attributes. For ease of use, select the "Output Results as JSON" save for future use.</p>
<form method="POST" action="/users">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
  <fieldset>
    <label for="number">How Many Users (1-100):</label>
    <input type="text" id="number" name="number" value={{ old('number', '10') }}>
  </fieldset>
    <fieldset>
    <label for="json">Output Results as JSON</label>
    <input type="checkbox" name="json" id="json" {{ old('json') ? "checked" : "" }}> 
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