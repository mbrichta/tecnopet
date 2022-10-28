import { useEffect, useState } from "react";

type UseWindowSizeReturn = {
  width: number | undefined;
  height: number | undefined;
};

const useWindowSize = (): UseWindowSizeReturn => {
  const [windowSize, setWindowSize] = useState<UseWindowSizeReturn>({
    width: undefined,
    height: undefined,
  });

  useEffect(() => {
    const handleResize = () => {
      setWindowSize({
        width: window.innerWidth,
        height: window.innerHeight,
      });
    };

    window.addEventListener("resize", handleResize);

    handleResize();

    return () => window.removeEventListener("resize", handleResize);
  }, []);
  return windowSize;
};

export default useWindowSize;
