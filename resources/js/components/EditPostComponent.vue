<template>
    <div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" :value="post.title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body" v-text="post.body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>

        <div class="my-3">
            <button type="button" class="btn btn-primary" @click="searchImage">Search image</button>
            <button type="button" class="btn btn-primary" @click="insertImage">Insert image</button>
        </div>
        <div class="my-3">
            <div class="col-md-12">
                <div v-for="image in selectedImages" class="card d-inline-block" style="width: 18rem;">
                    <img :src="image.previewURL" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                post: this.postData,
                pixabayKey: process.env.MIX_PIXABAY_API_KEY,
                imagesFromAPi: [],
                selectedImages: []
            }
        },
        props: ['postData'],
        methods: {
            searchImage: () => {
                $.ajax({
                    url: 'https://pixabay.com/api/?key=' + this.pixabayKey + '&q=' + this.post.title,
                    dataType: 'jsonp',
                    header: [
                        'Access-Control-Allow-Origin: *'
                    ],
                    success: response => {
                        if (response.total === 0) {
                            alert('Image not found');
                            return false;
                        }
                        this.imagesFromAPi = response.hits;
                        const idx = Math.floor(Math.random() * this.imagesFromAPi.length);
                        this.selectedImages.push(this.imagesFromAPi[idx]);
                    }
                });

            },
            insertImage: function () {
                this.selectedImages.forEach(image => {
                    this.post.body = '<img src="' + image.previewURL + '"> ' + this.post.body
                });
            },
        },
    }
</script>
