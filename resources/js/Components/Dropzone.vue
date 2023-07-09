<template>
    <div>
        <div class="bg-primary bg-opacity-5 rounded p-5 md:p-10">
            <p class="text-xl text-primary font-bold pb-[30px]">
                Please Upload Your Artwork
            </p>

            <div class="grid grid-cols-1">
                <div
                    class="rounded border border-dashed border-primary bg-white flex justify-center items-center h-[180px] cursor-pointer"
                    v-bind="getRootProps()"
                >
                    <div :class="isDragActive && 'bg-opacity-40 opacity-20'">
                        <input v-bind="getInputProps()" />
                        <img
                            :src="asset('assets/img/order2/upload.png')"
                            class="h-[60px] w-[60px] mx-auto mb-3"
                            alt=""
                        />
                        <p>
                            <span class="text-primary font-bold" @click="open"
                                >Choose</span
                            >
                            file or drag it here
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="grid lg:grid-cols-12 md:grid-cols-8 sm:grid-cols-6 grid-cols-2 mt-2 gap-2"
            >
                <div
                    v-for="(value, key) in files"
                    class="relative bg-white rounded p-2 max-h-[100px] max-w-[100px]"
                    :key="{ key }"
                >
                    <img
                        :src="value"
                        class="mx-auto object-contain w-full h-full"
                        alt=""
                    />
                    <span
                        @click="deleteImg(key)"
                        class="absolute bg-gray-300 rounded-full p-1 top-1 right-1 cursor-pointer h-[20px] w-[20px] text-white flex justify-center items-center text-[12px]"
                        >X</span
                    >
                </div>
            </div>

            <div class="mt-5">
                <p>
                    Orders are submitted as standard 2D embroidery. 3D Puff
                    embroidery is an extra $5 per hat and is only possible on
                    some designs and is billed separately.
                </p>
                <p class="mt-2">
                    Please keep in mind that really small details do not work
                    well for embroidery. Very small text and details will need
                    to be removed from some designs. LESS IS MORE when it comes
                    to embroidery designs.
                </p>
            </div>

            <div class="flex mt-5">
                <input type="checkbox" class="my-auto mr-2" />
                <p class="font-bold">
                    I OWN THE RIGHTS TO THE ARTWORK BEING USED OR HAVE
                    PERMISSION FROM THE OWNER TO USE IT
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import { ref, watch } from "vue";
import { useDropzone } from "vue3-dropzone";

export default {
    name: "UseDropzoneDemo",
    setup() {
        const files = ref([]);

        watch(files, async (newQuestion, oldQuestion) => {
            console.log(newQuestion, oldQuestion);
        });

        const deleteImg = (index) => {
            files.value.splice(index, 1);
        };

        async function readFile(unReadFiles) {
            await unReadFiles.map((value) => {
                const reader = new FileReader();
                reader.onload = () => {
                    console.log("file added");
                    files.value.push(reader.result);
                };
                reader.readAsDataURL(value);
            });
            console.log(files);
            return files;
        }

        function onDrop(acceptFiles) {
            readFile(acceptFiles);
        }

        const { getRootProps, getInputProps, ...rest } = useDropzone({
            onDrop,
        });

        return {
            getRootProps,
            getInputProps,
            deleteImg,
            files,
            ...rest,
        };
    },
};
</script>
