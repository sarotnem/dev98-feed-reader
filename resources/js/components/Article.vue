<template>
  <div class="article">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 my-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center"><router-link to="/" class="text-info h5 mb-3">&larr; Return to home</router-link></div>
              <h2 class="card-title mb-3 text-center">{{article.title}}</h2>
              <h4
                class="card-subtitle mb-5 text-muted text-center"
              >Posted by {{article.author}}, {{article.date}}</h4>
              <p v-html="article.content" class="card-text"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { HTTP } from "@/js/http-common";

export default {
  props: ["id"],
  data() {
    return {
      article: {}
    };
  },
  methods: {
    getArticle() {
      HTTP.get(`article/${this.id}`)
        .then(result => {
          this.article = result.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  mounted() {
    this.getArticle();
  }
};
</script>
