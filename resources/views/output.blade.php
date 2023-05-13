@foreach($datas as $data)
<div>
  <input id="Field6" name="join[{{$data-> id }}]"  value="{{$data-> id}}" tabindex="8">
  <label class="choice" for="Field6">{{ $data -> name }}</label>
</div>
 @endforeach