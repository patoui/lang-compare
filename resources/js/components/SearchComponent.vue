<template>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Lang Compare</h1>
                    <p class="font-italic text-center m-0">Look up a method from one language and see the equivalent in another!</p>
                    <p class="font-italic text-center"><small>(currently only has array methods)</small></p>
                    <div>
                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select id="lang" class="form-control" v-model="lang">
                                <option value="php">PHP</option>
                                <option value="javascript">JavaScript</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" aria-describedby="search" placeholder="Search" v-on:input="debounceQuery" v-on:keydown.enter.prevent="debounceQuery">
                        </div>
                    </div>
                </div>
            </div>
            <div v-show="matches.length === 0" class="row">
                <div class="col">
                    <h3 class="text-center">-- No results --</h3>
                </div>
            </div>
            <div v-show="comparison && matches.length > 0" class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h2>Matches for: <a v-bind:href="comparison.url" target="_blank">{{ comparison.method }}</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Language</th>
                                        <th scope="col">Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="match in matches" v-bind:key="match.id">
                                        <td>{{ match.lang }}</td>
                                        <td><a v-bind:href="match.url" target="_blank">{{ match.method }}</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                lang: 'php',
                query: '',
                comparison: {},
                matches: []
            };
        },

        methods: {
            debounceQuery: _.debounce(
                function (e) {
                    this.query = e.target.value;
                    this.search();
                },
                500
            ),
            search() {
                axios.get('/api/search', { params: { q: this.query, lang: this.lang }})
                    .then(this.refresh)
                    .catch(function (error) {
                        // TBD
                    });
            },
            refresh({data}) {
                this.comparison = data.comparison;
                this.matches = data.matches;
            }
        }
    }
</script>
