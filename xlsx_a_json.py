import pandas as pd

df = pd.read_excel("data_universidad/data_U_ofi.xlsx")

df_pregrado = df[df["NIVEL_ACADEMICO"].str.upper() == "PREGRADO"]

df_pregrado.to_json("data_U_pregrado.json", orient="records", force_ascii=False, indent=4)

print("✅ Conversión completada: data_U_pregrado.json generado correctamente (solo PREGRADO).")
