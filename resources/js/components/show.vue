<template>
  <div class="container-fluid">

    <div class="row">
        <div class=" displaypanel">
          <div class="col-md-6">
            <div class="text-left"> <h2>{{ episodetitle }}</h2></div>
          </div>
          <div class="col-md-6">
            <div class="text-right">
              <button v-if="user_like == false" type="button" v-on:click="like" class="btn likebtn">Like {{episodelike}} <i class="fa fa-thumbs-up"></i></button>
              <button v-if="user_like == true" type="button" v-on:click="unlike" class="btn likebtn">UnLike {{episodelike}} <i class="fa fa-thumbs-down"></i></button>

            </div>
          </div>
        </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="card videos">
            <vue-plyr  ref="plyr">
              <video poster="" src="video.mp4">
                <source src="" type="video/mp4" size="720">
                <source src="" type="video/mp4" size="1080">
                <track kind="captions" label="English" srclang="en" src="captions-en.vtt" default>
              </video>
            </vue-plyr>

        </div>
        <div  class="row">
          <tn-slider class='wrapper' :index='index' :count='4'>
            <p slot='tn-prev' class='prev-icon'>prev</p>
            <tn-item v-for="(slide,i) in episode" v-bind:key="slide.id" @on-item-click='show(i,slide.id)'>
              <div class='customed-item'>
                <img :src="'/assets/'+slide['thumbnail']">
                <p>{{ slide['title'] }}</p>
              </div>
            </tn-item>
            <p slot='tn-next' class='next-icon'>next</p>
          </tn-slider>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { TnSlider, TnItem } from 'thumbnail-slider';

  import axios from 'axios';

  axios.defaults.headers.common = {
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

  };

  export default {
    components: {
      'tn-item': TnItem,
      'tn-slider': TnSlider,
    },
    props: {

      seriesid: '',
    },
    data () {
      return {
        index: 0,
        episode : [],
        episodeid : '',
        episodetitle: '',
        episodelike: 0,
        user_like : false,


      }
    },

    methods: {

      init_showtv: function () {

        axios.post( '/../episode/show', {
          series_id: this.seriesid,

        })
          .then(res => {
            this.episode = res.data.episode;
            this.episodetitle = this.episode[0].title;
            this.episodeid = this.episode[0].id;
            this.player.source = {
              type: 'video',
              title: this.episode[0].title,
              sources: [
                {
                  src: '/assets/'+this.episode[0].url,
                  type: 'video/mp4',
                  size: 720,
                }
              ],
              poster: '/assets/'+ this.episode[0].thumbnail
            };

          });


      },
      like: function(){

        axios.post( '/../episode/like', {
          episodeid: this.episodeid,

        }) .then(res => {

          this.user_like = true;
          this.episodelike = this.episodelike + 1;
        });


      },
      unlike: function(){

        axios.post( '/../episode/unlike', {
          episodeid: this.episodeid,

        }) .then(res => {

          if(res.data.result){
            this.user_like = false;
            this.episodelike = this.episodelike - 1;
          }

        });
      },
      show: function(i,id){

        var self = this;

        axios.post( '/../episode/getlike', {
          episodeid: this.episodeid,

        }) .then(res => {

          console.log(res.data);
          this.episodelike = res.data.episodelike;
          this.user_like = res.data.user_like;

        });


        this.episode.forEach(function (arrayItem) {

          if (arrayItem.id == id) {

            self.episodetitle = arrayItem.title;
            self.episodeid = arrayItem.id;

            self.player.source = {
              type: 'video',
              title: arrayItem.title,
              sources: [
                {
                  src: '/assets/'+ arrayItem.url,
                  type: 'video/mp4',
                  size: 720,
                }
              ],
              poster: '/assets/'+ arrayItem.thumbnail
            };
            self.index = i;

          }
        });


      },




    },
    computed: {
      player () {
        return this.$refs.plyr.player
      }
    },
    created () {

     console.log(this.seriesid);

      this.init_showtv();

    },

    mounted() {
      this.player
    }
  }
</script>
<style >


  .customed-item img {

    width: 100%;

  }
  .prev-icon {

    color: #fff;
    background: #495057;
    padding: 10px;
    font-weight: 700;
    line-height: 7px;
    border-radius: 15px;
    margin-top: 40px;

  }
  .next-icon {

    color: #fff;
    background: #495057;
    padding: 10px;
    font-weight: 700;
    line-height: 7px;
    border-radius: 15px;
    margin-top: 40px;
  }

  .tn-item{
    margin: 0 20px;
    width: 30%;
  }
  .displaypanel{
    display: inline-flex;
    margin: 20px 0;
    width: 100%;
  }



  .likebtn{
    background: rgba(52, 144, 220, 0.25);
    color: #00b3ff;
  }

</style>
