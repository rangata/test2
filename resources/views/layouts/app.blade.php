<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
    {{--<link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/vue-material.min.css">--}}
    {{--<link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/theme/default.css">--}}

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <style>
        #keep main .container {
            height: 660px;
        }

        .navigation-drawer__border {
            display: none;
        }

        .text {
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div id="app">
        <div id="app">
            <v-app id="inspire">
                <v-navigation-drawer
                        fixed
                        clipped
                        class="grey lighten-3"
                        app
                        v-model="drawer"
                >
                    <v-list
                            dense
                            class="grey lighten-4"
                    >
                        <v-list-tile @click="">
                            <v-list-tile-action>
                                <v-icon>home</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <router-link :to="{ path: 'home', params: { id: 1} }">
                                <v-list-tile-title>
                                    title
                                </v-list-tile-title>
                                </router-link>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>
                </v-navigation-drawer>
                <v-toolbar color="dark" app absolute clipped-left>
                    <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
                    <span class="title ml-3 mr-5">КОнф</span>
                    <v-text-field
                            solo-inverted
                            flat
                            label="Search"
                            prepend-icon="search"
                    ></v-text-field>
                    <v-spacer></v-spacer>
                </v-toolbar>
                    <router-view></router-view>
            </v-app>
        </div>
    </div>
</body>
</html>
