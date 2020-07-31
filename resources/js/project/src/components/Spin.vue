<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <button v-on:click="spinRandom">Tentar a sorte</button>
    <p id='message'>
    </p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Spin',
  props: {
    msg: String
  },
  methods: {
    spinRandom: function (btn) {
      btn.toElement.disabled = true;
      let spin = document.getElementById('spin');
      spin.style = '';
      spin.style.animation = 'spin 1s linear infinite';
      axios.get('http://localhost:7070/api/spin-discount')
      .then(function(response){
        let discount = response.data.data.discount;

        let time = 1000;
        setTimeout(function() {
          spin.style.animation = 'spin 1.3s linear infinite';
        }, time*1);

        setTimeout(function() {
          spin.style.animation = 'spin 1.6s linear infinite';
        }, time*3);

        setTimeout(function() {
          spin.style.animation = 'spin 1.9s linear infinite';
        }, time*5);

        setTimeout(function() {
          spin.style.animation = 'spin 2.1s linear infinite';
        }, time*8)


        setTimeout(function() {
          spin.style.animation = 'spin 2.4s linear infinite';
        }, time*13)


        setTimeout(function() {
          spin.style.animation = 'spin 2.7s linear infinite';
        }, time*19)

        setTimeout(function() {
          spin.style.animation = '';
          /*
            10 - 0deg
            5 - 30deg
            1 - 60deg
            100 - 90deg
            15 - 120deg
            jackpo - 150deg
            20 - 180deg
            5 - 210deg
            1 - 240deg
            50 - 270deg
            2 - 300deg
            0 - 330deg
          */
          let array = [];
          array[0] = '330deg';
          array[1] = '60deg OR 240deg';
          array[2] = '300deg';
          array[5] = '30deg OR 210deg';
          array[10] = '0deg';
          array[15] = '120deg';
          array[20] = '180deg';
          array[30] = '150deg';
          array[50] = '270deg';
          array[100] = '90deg';

          spin.style = 'transform: rotate('+array[discount]+')';

          console.log(array)
          let message = document.getElementById('message');
          if (discount > 0) {
            message.innerHTML = 'Parabéns você tem '+discount+' de desconto.';
          } else {
            message.innerHTML = 'Infelizmente você não teve desconto.';
          }

          btn.toElement.innerHTML = 'Tentar a sorte novamente';
          btn.toElement.disabled = false;
        }, time*25)
      })
      .catch(function(err){ 
        console.log('Failed retrieving information', err);
      });
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}

.animation-1x {
  animation:spin 1s linear infinite;
}

</style>
