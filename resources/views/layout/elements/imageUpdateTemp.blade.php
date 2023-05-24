<div class="fileup-theme2">
    <update-img-container :candelete="{{(isset($candelete))?$candelete:true}}" :ucolumn="'{{$ucolumn}}'"
        :utable="'{{$utable}}'" :uidkey="'{{$uidkey}}'" :path="'{{$path}}'" :fullpath="'{{asset($path)}}'"
        :uimages="{{$images}}" :srckey="'{{$srcKey}}'" :inputid="'{{$input_id}}'" :name="'{{$input_name}}'"
        :multiple="{{$multiple}}" :required="{{$required}}"></update-img-container>
</div>