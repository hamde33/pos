<div class="fileup-theme2">
    <div class="fileup-queue">
        <img-container v-for="(img,index) in images" :key="index" :image="img" :inputid="'{{$input_id}}'" v-on:remove="removeImg(index,$event)" v-on:remove_not_allowed="removeNotAllowedImg(index,$event)"></img-container>
    </div>
    <div class="btn btn-default fileup-btn">
        <img-input v-on:images_loaded="imageLoaded($event)" :id="'{{$input_id}}'" :name="'{{$input_name}}'" :multiple="{{$multiple}}" :required="{{$required}}"></img-input>
    </div>
</div>
