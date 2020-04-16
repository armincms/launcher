<template>
    <card class="flex flex-wrap items-center justify-center">
        <div v-for="resource in card.resources" class="flex justify-between px-3 py-3 hover:bg-40 w-1/3">  
            <div class="flex p-2 hover:bg-success-light rounded btn btn-larg btn-outline" style="border-color:var(--success)">
                <svg 
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width=36 heigth=36 viewBox="0 0 44 44" xml:space="preserve">
                    <path fill=var(--danger) d="M22,44c-3.309,0-6-2.665-6-5.941V28H5.941C2.665,28,0,25.309,0,22s2.665-6,5.941-6H16V5.941C16,2.665,18.691,0,22,0  s6,2.665,6,5.941V16h10.059C41.335,16,44,18.691,44,22s-2.665,6-5.941,6H28v10.059C28,41.335,25.309,44,22,44z M5.941,18  C3.805,18,2,19.832,2,22s1.805,4,3.941,4H18v12.059C18,40.195,19.832,42,22,42s4-1.805,4-3.941V26h12.059C40.195,26,42,24.168,42,22  s-1.805-4-3.941-4H26V5.941C26,3.805,24.168,2,22,2s-4,1.805-4,3.941V18H5.941z"/>
                </svg>
                <h4 class="pt-3 px-3"> 
                    <router-link :to="{
                        name: 'create',
                        params: {
                            resourceName: resource.uriKey
                        }
                    }" class="text-black text-justify no-underline">
                        {{ __('Create :resource', { resource: resource.singularLabel }) }}
                    </router-link>
                </h4>  
            </div>

            <div class="flex p-2 hover:bg-success-light rounded btn btn-larg btn-outline" style="border-color:var(--success)">
                <svg 
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width=36 height=36 viewBox="0 0 56 56" xml:space="preserve"> 
                    <path fill=var(--danger) d="M22.66,0H3.34C1.498,0,0,1.498,0,3.34v19.32C0,24.502,1.498,26,3.34,26h19.32c1.842,0,3.34-1.498,3.34-3.34V3.34   C26,1.498,24.502,0,22.66,0z M24,22.66c0,0.739-0.601,1.34-1.34,1.34H3.34C2.601,24,2,23.399,2,22.66V3.34C2,2.601,2.601,2,3.34,2   h19.32C23.399,2,24,2.601,24,3.34V22.66z"/>
                    <path fill=var(--danger) d="M52.66,0H33.34C31.498,0,30,1.498,30,3.34v19.32c0,1.842,1.498,3.34,3.34,3.34h19.32c1.842,0,3.34-1.498,3.34-3.34V3.34   C56,1.498,54.502,0,52.66,0z M54,22.66c0,0.739-0.601,1.34-1.34,1.34H33.34C32.601,24,32,23.399,32,22.66V3.34   C32,2.601,32.601,2,33.34,2h19.32C53.399,2,54,2.601,54,3.34V22.66z"/>
                    <path fill=var(--danger) d="M22.66,30H3.34C1.498,30,0,31.498,0,33.34v19.32C0,54.502,1.498,56,3.34,56h19.32c1.842,0,3.34-1.498,3.34-3.34V33.34   C26,31.498,24.502,30,22.66,30z M24,52.66c0,0.739-0.601,1.34-1.34,1.34H3.34C2.601,54,2,53.399,2,52.66V33.34   C2,32.601,2.601,32,3.34,32h19.32c0.739,0,1.34,0.601,1.34,1.34V52.66z"/>
                    <path fill=var(--danger) d="M55,42H44V31c0-0.553-0.447-1-1-1s-1,0.447-1,1v11H31c-0.553,0-1,0.447-1,1s0.447,1,1,1h11v11c0,0.553,0.447,1,1,1   s1-0.447,1-1V44h11c0.553,0,1-0.447,1-1S55.553,42,55,42z"/> 
            </svg>
                <h4 class="pt-3 px-3"> 
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: resource.uriKey
                        }
                    }" class="text-black text-justify no-underline">
                        {{ resource.label }}
                    </router-link>
                </li>
                </h4>
                
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() { 
    },
}
</script>
