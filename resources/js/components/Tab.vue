<template>
    <div class="tab-content">
        <div class="layout-col">
            <h2 class="definition-list-title">Self Diagnosis</h2>

            <p>The following tests were performed.</p>

            <h2 class="definition-list-title">Generic checks</h2>

            <table>
                <tr v-for="check in meta.generic_checks">
                    <td>
                        <span v-if="check.result">✅</span>
                        <span v-else>❌</span>
                    </td>
                    <td width="45%">{{ check.name }}</td>
                    <td>
                        <span v-if="! check.result" v-text="check.message"></span>
                    </td>
                </tr>
            </table>

            <h2 class="definition-list-title">Environment specific checks</h2>

            <table>
                <tr v-for="check in meta.env_checks">
                    <td>
                        <span v-if="check.result">✅</span>
                        <span v-else>❌</span>
                    </td>
                    <td width="45%">{{ check.name }}</td>
                    <td>
                        <span v-if="! check.result" v-text="check.message"></span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['meta'],
    }
</script>

<style>
    h2 {
        padding-top: 1rem;
    }
    tr td {
        vertical-align: middle;
        padding: 10px;
        border-bottom: 1px solid #d7d7d7;
    }
</style>
