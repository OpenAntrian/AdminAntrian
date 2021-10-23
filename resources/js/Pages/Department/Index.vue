<template>
    <app-layout title="Department">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Department
            </h2>
        </template>

        <!--  -->
        <div class="py-12">
          <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">
            <jet-input
              type="text"
              class="block ml-2 mb-4 w-60"
              placeholder="Cari post..."
            />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                          <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama
                          </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr v-if="!departments.data.length">
                        <td class="p-4 text-center text-gray-900" colspan="1">
                          No data
                        </td>
                      </tr>
                      <tr v-for="(list, index) in departments.data" :key="list.id">
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ list.name }}</td>
                      </tr>
                    </tbody>
                </table>
                <pagination :links="departments.links"></pagination> 
            </div>
          </div>
        </div>
    </app-layout>
</template>

<script>
    //import { reactive, watchEffect, defineComponent } from 'vue'
    import { defineComponent } from 'vue'
    //import { pickBy } from "lodash";
    //import { Inertia } from '@inertiajs/inertia';
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetButton from "@/Jetstream/Button";
    import JetInput from "@/Jetstream/Input";
    import Pagination from '@/Components/Pagination'

    export default defineComponent({
        components: {
          AppLayout,
          JetButton,
          JetInput,
          Pagination,
        },

        // props: [
        //   'departments', 'filtersDepartments'
        // ],

        props: [
          'departments',
          'filtersDepartments',
        ],

        // setup(props) {
        //   const form = reactive({
        //     search: props.filtersDepartments.search,
        //     page: props.filtersDepartments.page,
        //   });

        //   watchEffect(() => {
        //     const query = pickBy(form);
        //     Inertia.replace(
        //       route("departments.index", Object.keys(query).length ? query : {})
        //     );
        //   });

        //   return { form };
        // },

    })
</script>
