@props(['url'])
<tr>
<td class="header">
<a href="https://hsp.joredz.com" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://hsp.joredz.com/storage/logo.png" class="rounded-lg" width="50px" height="50px;" alt="" title="" />
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
