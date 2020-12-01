<template>
    <b-container fluid class="mt-2">
        <b-row>
            <b-col cols="3"> </b-col>
            <b-col cols="6">
                <b-container class="mt-5">
                    <b-carousel 
                    id="carousel-1"
                    v-model="slide"
                    :interval="8000"
                    controls
                    indicators
                    background="#ababab"
                    img-width="100"
                    img-height="30"
                    style="text-shadow: 1px 1px 2px #333;"
                    @sliding-start="onSlideStart"
                    @sliding-end="onSlideEnd">
                    
                    <!-- Text slides with image -->
                    <b-carousel-slide
                        caption="First slide"
                        text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                        img-src="https://picsum.photos/1024/480/?image=52"
                    ></b-carousel-slide>

                    <!-- Slides with custom text -->
                    <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
                        <h1>Hello world!</h1>
                    </b-carousel-slide>

                    </b-carousel>

                </b-container>
            </b-col>
            <b-col cols="3"> </b-col>

        </b-row>
    </b-container>
</template>

<script>
export default {
    name: "ContentPag",
    data() {
        return {
            slide: 0,
            sliding: null
        }
    },
    methods:{
        onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
};
</script>


