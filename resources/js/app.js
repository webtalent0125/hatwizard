import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import VueNumberInput from "@chenfengyuan/vue-number-input";
import Vapor from "laravel-vapor";
import moment from "moment";

Vapor.withBaseAssetUrl(import.meta.env.APP_URL);
window.Vapor = Vapor;

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mixin({
                methods: { asset: window.Vapor.asset },
            });

        app.component(VueNumberInput.name, VueNumberInput);

        app.config.globalProperties.$filters = {
            diffDate(value) {
                let diff = 0;
                diff = moment().diff(moment(String(value)), "days");
                if (diff !== 0) {
                    return diff + (diff === 1 ? " day" : " days");
                }
                diff = moment().diff(moment(String(value)), "hours");
                if (diff !== 0) {
                    return diff + (diff === 1 ? " hour" : " hours");
                }
                diff = moment().diff(moment(String(value)), "minutes");
                if (diff !== 0) {
                    return diff + (diff === 1 ? " minute" : " minutes");
                }
                diff = moment().diff(moment(String(value)), "seconds");
                return diff + (diff === 1 ? " second" : " seconds");
            },
            formatDate(value) {
                return moment(String(value)).format("YYYY-MM-DD");
            },
            formatDateTime(value) {
                return moment(String(value)).format("YYYY-MM-DD hh:mm:ss");
            },
        };

        return app.mount(el);
    },
    progress: {
        color: "#502A7B",
    },
});
